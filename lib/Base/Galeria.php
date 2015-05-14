<?php
/*
 * TrcIMPLAN Sitio Web - Galería
 *
 * Copyright (C) 2014 IMPLAN Torreón
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Namespace
namespace Base;

/**
 * Clase Galeria
 */
class Galeria {

    public $encabezado;       // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $encabezado_color; // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    public $titulo;           // Título de la página
    public $publicaciones;    // Arreglo con instancias de Publicacion
    // Está pendiente programar que este programa lea trcimplan.css para saber cuales son los IDs
    public $categorias_ids = array(
        'categorias-bienestar',
        'categorias-competitividad',
        'categorias-cultura',
        'categorias-delincuencia',
        'categorias-doing-business',
        'categorias-educacion',
        'categorias-empleo',
        'categorias-empresas',
        'categorias-finanzas-publicas',
        'categorias-genero',
        'categorias-gobierno-digital',
        'categorias-gobierno',
        'categorias-grupos-vulnerables',
        'categorias-infraestructura',
        'categorias-innovacion',
        'categorias-macroeconomia',
        'categorias-mercados',
        'categorias-movilidad',
        'categorias-participacion-ciudadana',
        'categorias-poblacion',
        'categorias-recursos-naturales',
        'categorias-salud',
        'categorias-seguridad',
        'categorias-servicios-publicos',
        'categorias-transparencia',
        'categorias-vialidad',
        'categorias-vivienda');

    /**
     * Constructor
     *
     * @param array Arreglo con instancias de Publicacion
     */
    public function __construct($publicaciones) {
        $this->publicaciones = $publicaciones;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_array($this->publicaciones)) {
            throw new \Exception("Error en Galeria, html: La propiedad publicaciones NO es un arreglo.");
        }
        if (count($this->publicaciones) == 0) {
            throw new \Exception("Error en Galeria, html: La propiedad publicaciones NO tiene datos.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Si el encabezado está definido
        if ($this->encabezado != '') {
            // Se pone el código HTML del encabezado
            $a[] = $this->encabezado;
            // Y el título de la página es invisible
            if ($this->titulo != '') {
                $a[] = "      <h1 style=\"display:none;\">{$this->titulo}</h1>";
            }
        } elseif ($this->titulo != '') {
            // Hay título. Si hay icono definido en Navegación
            $navegacion_config = new \Configuracion\NavegacionConfig();
            if (array_key_exists($this->titulo, $navegacion_config->iconos)) {
                $encabezado = sprintf('<i class="%s encabezado-icono"></i> %s', $navegacion_config->iconos[$this->titulo], $this->titulo);
            } else {
                $encabezado = $this->titulo;
            }
            // Acumular
            if ($this->encabezado_color != '') {
                $a[] = "      <div class=\"encabezado\" style=\"background-color:{$this->encabezado_color};\">";
            } else {
                $a[] = '      <div class="encabezado">';
            }
            $a[] = "        <span><h1>$encabezado</h1></span>";
            $a[] = '      </div>';
        }
        // Tabla inicia
        $a[] = '      <div class="row">';
        // Bucle por Publicaciones
        foreach ($this->publicaciones as $p) {
            $a[] = '        <div class="col-xs-6 col-md-4 col-lg-3">';
            // Validar
            if (!is_object($p)) {
                throw new \Exception("Error en Galeria, html: Una publicación NO es una instancia.");
            }
            if (!($p instanceof Publicacion)) {
                throw new \Exception("Error en Galeria, html: Una publicación NO es una instancia de Publicacion.");
            }
            // Si el estado no es 'publicar', se salta
            if (strtolower($p->estado) != 'publicar') {
                continue;
            }
            // Validar nombre
            if (!is_string($p->nombre) || ($p->nombre == '')) {
                throw new \Exception("Error en Galeria, html: Una publicación NO tiene nombre.");
            }
            // Acumular
            $a[] = '          <div class="thumbnail galeria-thumbnail">';
            if ($p->imagen_previa != '') {
                // Obtener de la ruta ../imagenes/categorias/prueba-uno.png el ID donde [1] => categorias y [2] => prueba-uno
                preg_match('@([^/]+)/([^/]+)\.\w+$@', $p->imagen_previa, $coincidencias); //
                $id = sprintf('%s-%s', $coincidencias[1], $coincidencias[2]);
                // Si existe ese ID en categorias_ids
                if (in_array($id, $this->categorias_ids)) {
                    // Poner la imagen como rollover, el ID debe estar definido en el archivo CSS
                    $a[] = "            <span class=\"img-thumbnail galeria-imagen\" ><a id=\"$id\" href=\"{$p->url()}\" title=\"{$p->nombre}\"></a></span>";
                } else {
                    // Poner la imagen de forma normal
                    $a[] = "            <a href=\"{$p->url()}\" title=\"{$p->nombre}\"><img class=\"img-thumbnail galeria-imagen\" src=\"{$p->imagen_previa}\" alt=\"{$p->nombre}\"></a>";
                }
                // Agregar
            } elseif ($p->icono != '') {
                $a[] = "            <a class=\"{$p->icono} galeria-icono\" href=\"{$p->url()}\"></a>";
            }
            $a[] = '            <div class="caption">';
            $a[] = "              <p class=\"galeria-nombre\"><a href=\"{$p->url()}\">{$p->nombre}</a></p>";
            $a[] = '            </div>';
            $a[] = '          </div>';
            $a[] = '        </div>'; // col
        }
        // Tabla termina
        $a[] = '      </div>'; // row
        // Entregar
        return implode("\n", $a)."\n";
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Galeria

?>
