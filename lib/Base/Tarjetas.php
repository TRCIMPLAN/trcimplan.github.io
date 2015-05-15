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
class Tarjetas extends Pagina {

    // public $encabezado;       // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    // public $encabezado_color; // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    // public $titulo;           // Título de la página
    // public $publicaciones;    // Arreglo con instancias de Publicacion

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Agregar el código HTML del encabezado
        $a[] = $this->encabezado_html();
        // Tabla inicia
        $a[] = '      <div class="row" id="tarjetas">';
        // Bucle por Publicaciones
        foreach ($this->publicaciones as $p) {
            // Validar nombre
            if (!is_string($p->nombre) || ($p->nombre == '')) {
                throw new \Exception("Error en Tarjetas, html: Una publicación NO tiene nombre.");
            }
            // Por defecto el target es vacío
            $target       = '';
            $boton_target = '';
            // Si está definido archivo
            if ($p->archivo != '') {
                // El vínculo es a una página HTML creada por este sistema
                $url = $p->archivo.'.html';
                // URL para el botón
                if ($p->url != '') {
                    $boton_url    = $p->url;
                    $boton_target = ' target="_blank"';
                } else {
                    $boton_url    = $url;
                }
            } else {
                // El vínculo es un URL
                if ($p->url != '') {
                    $url       = $p->url;
                    $boton_url = $url;
                    // Si es fuera del sitio o a un archivo PDF, RAR, TAR.GZ, TGZ o ZIP
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
            $a[] = '        <div class="col-sm-6 col-md-3">';
            $a[] = '          <div class="thumbnail tarjeta">';
            if ($p->imagen != '') {
                $a[] = sprintf('            <a href="%s"%s><img src="%s" alt="%s"></a>', $url, $target, $p->imagen, $p->nombre);
            }
            $a[] = '            <div class="caption">';
            $a[] = sprintf('              <h3 class="caption-titulo"><a href="%s"%s>%s</a></h3>', $url, $target, $p->nombre);
            if ($p->descripcion != '') {
                $a[] = sprintf('              <p class="caption-descripcion">%s</p>', $p->descripcion);
            }
            $a[] = sprintf('              <a href="%s" class="btn btn-default caption-boton" role="button"%s>%s</a>', $boton_url, $boton_target, $url_etiqueta);
            $a[] = '            </div>';
            $a[] = '          </div>';
            $a[] = '        </div>';
        }
        // Tabla termina
        $a[] = '      </div>'; // row
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Tarjetas

?>
