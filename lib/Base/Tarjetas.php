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
            throw new \Exception("Error en Indice, html: La propiedad publicaciones no es un arreglo.");
        }
        if (count($this->publicaciones) == 0) {
            throw new \Exception("Error en Indice, html: La propiedad publicaciones no tiene datos.");
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
                throw new \Exception("Error en Indice, html: Una publicación no es una instancia.");
            }
            if (!($p instanceof Publicacion)) {
                throw new \Exception("Error en Indice, html: Una publicación no es una instancia de Publicacion.");
            }
            // Si el estado no es 'publicar', se salta
            if ($p->estado != 'publicar') {
                continue;
            }
            // Definir URL del vínculo
            $vinculo = .'.html';
            // Acumular
            $a[] = '        <div class="col-sm-6 col-md-4">';
            $a[] = '          <div class="thumbnail">';
            $a[] = sprintf('            <a href="%s.html"><img src="%s" alt="%s"></a>', $p->archivo, $p->imagen_previa, $p->nombre);
            $a[] = '            <div class="caption">';
            $a[] = sprintf('              <h3><a href="%s">%s</a></h3>', $p->archivo, $p->nombre);
            $a[] = sprintf('              <p>%s</p>', $p->descripcion);
            $a[] = sprintf('              <p><a href="%s.html" class="btn btn-default" role="button">%s</a></p>', $p->archivo, $p->nombre);
            $a[] = '            </div>';
            $a[] = '          </div>';
            $a[] = '        </div>';
        }
        // Tabla termina
        $a[] = '      </div>'; // row
        // Entregar
        return implode("\n", $a)."\n";
    } // html

/*
    // public $fecha;                     // La fecha en forma de YYYY-MM-DD HH:MM, siendo así se ordena cronológicamente
    // public $autor;                     // El nombre o apodo a quien se le atribuye
    // public $aparece_en_pagina_inicial; // Verdadero si va aparecer en la página de inicio
    // public $para_compartir;            // Si es verdadero pondrá los botones para compartir en Twitter/Facebook
    // public $imagen                     // Ruta relativa a un archivo de imagen
    // public $imagen_previa;             // Ruta relativa a un archivo de imagen para la vista previa
    // public $icono;                     // Nombre del icono Font Awsome
    // public $region_nivel;              // Nivel de la región. Le sirve a Relacionados para preferir los que sean de la misma región
    // public $estado                     // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
    public $nombre;                       // Título completo
    public $nombre_menu;                  // Un título corto. Debe coincidir con la etiqueta usada en Navegacion
    public $directorio;                   // Directorio donde se guardará la publicación completa
    public $archivo;                      // El nombre del archivo para la publicación
    public $descripcion      = '';        // Descripción del sitio o la página
    public $claves;                       // Claves que ayuden a los buscadores
    public $categorias       = array();   // Arreglo con las categorías de la publicación
    public $encabezado;                   // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $encabezado_color = '';        // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    public $contenido        = array();   // Contenido código HTML de la publicación
    public $javascript       = array();   // Opcional. Código Javascript. Debe estar aparte para ponerlo al final de la página.
    public $redifusion       = '';        // Opcional. Código HTML con la publicación que va para redifusión (RSS feed).
    public $en_raiz          = false;     // Verdadero si el archivo va a la raiz del sitio web. Debe ser verdadero cuando se hacen las páginas de inicio.
    public $en_otro          = false;     // Verdadero si el archivo va a OTRO lugar como al directorio autores, categorias, etc.

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf"><img src="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.png" alt="Plan Director de Desarrollo Urbano de Torreón Coahuila"></a>
            <div class="caption">
              <h3><a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf">Plan Director de Desarrollo Urbano de Torreón Coahuila</a></h3>
              <p>La propuesta del Plan se centra en el objetivo general del Programa Metropolitano de establecer una metrópoli articulada y
                coherente; fuertemente vinculada con su ámbito regional inmediato (Comarca Lagunera), donde se genera gran parte de su riqueza;
                que desarrolle en su periferia una ciudad adecuada a las necesidades del siglo XXI y fortalezca sus antiguos centros, con
                equipamiento e infraestructura para la regeneración urbana.</p>
              <p><a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf" class="btn btn-default" role="button">Descargar PDF 4.1 MB</a></p>
            </div>
          </div>
        </div>
*/

} // Clase Tarjetas

?>
