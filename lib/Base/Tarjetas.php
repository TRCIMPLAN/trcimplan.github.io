<?php
/**
 * TrcIMPLAN - Tarjetas
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase Tarjetas
 */
class Tarjetas {

    public $encabezado;       // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $encabezado_color; // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    public $titulo;           // Título de la página
    public $publicaciones;    // Arreglo con instancias de Publicacion

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
            throw new \Exception("Error en Tarjetas, html: La propiedad publicaciones NO es un arreglo.");
        }
        if (count($this->publicaciones) == 0) {
            throw new \Exception("Error en Tarjetas, html: La propiedad publicaciones NO tiene datos.");
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
            // Validar
            if (!is_object($p)) {
                throw new \Exception("Error en Tarjetas, html: Una publicación NO es una instancia.");
            }
            if (!($p instanceof Publicacion)) {
                throw new \Exception("Error en Tarjetas, html: Una publicación NO es una instancia de Publicacion.");
            }
            // Si el estado no es 'publicar', se salta
            if (strtolower($p->estado) != 'publicar') {
                continue;
            }
            // Validar nombre
            if (!is_string($p->nombre) || ($p->nombre == '')) {
                throw new \Exception("Error en Tarjetas, html: Una publicación NO tiene nombre.");
            }
            // Por defecto el target es vacío
            $target = '';
            // Si está definido archivo
            if ($p->archivo != '') {
                // El vínculo es a una página HTML
                $url = $p->archivo.'.html';
                // URL para el botón
                if ($p->url != '') {
                    $boton_url    = $p->url;
                    $boton_target = ' target="_blank"';
                } else {
                    $boton_url = $url;
                    $boton_target = '';
                }
            } else {
                // El vínculo es un URL a un archivo o a una dirección fuera del sitio
                if ($p->url != '') {
                    $url = $p->url;
                    if ((preg_match('/^(http|https|ftp|ftps):\/\//', $url) === 1) || (preg_match('/\.(pdf|rar|tar.gz|tgz|zip)$/', $url) === 1)) {
                        $target = ' target="_blank"';
                    }
                } else {
                    throw new \Exception("Error en Tarjetas, html: Una publicación tiene las propiedades archivo y url vacías.");
                }
            }
            // Definir la etiqueta del botón
            if ($p->url_etiqueta != '') {
                $url_etiqueta = $p->url_etiqueta;
            } else {
                $url_etiqueta = $p->nombre;
            }
            // Acumular
            $a[] = '        <div id="tarjetas" class="col-sm-6 col-md-3">';
            $a[] = '          <div class="thumbnail tarjeta">';
            if ($p->imagen != '') {
                $a[] = sprintf('            <a href="%s"%s><img src="%s" alt="%s"></a>', $url, $target, $p->imagen, $p->nombre);
            }
            $a[] = '            <div class="caption">';
            $a[] = sprintf('              <h3><a href="%s"%s>%s</a></h3>', $url, $target, $p->nombre);
            if ($p->descripcion != '') {
                $a[] = sprintf('              <p>%s</p>', $p->descripcion);
            }
            $a[] = sprintf('              <p><a href="%s" class="btn btn-default" role="button"%s>%s</a></p>', $boton_url, $boton_target, $url_etiqueta);
            $a[] = '            </div>';
            $a[] = '          </div>';
            $a[] = '        </div>';
        }
        // Tabla termina
        $a[] = '      </div>'; // row
        // Entregar
        return implode("\n", $a)."\n";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript


} // Clase Tarjetas

?>
