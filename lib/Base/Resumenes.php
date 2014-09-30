<?php
/*
 * SMIbeta - Resúmenes
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
 * Clase Resumenes
 */
class Resumenes {

    public $encabezado;
    public $titulo;                  // Título de la página
    public $publicaciones;           // Arreglo con instancias de Publicacion
    public $en_raiz         = false; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $cantidad_maxima = 3;     // Cantidad máxima de publicaciones a mostrar

    /**
     * Constructor
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
            throw new \Exception("Error en Resumenes, html: La propiedad publicaciones no es un arreglo.");
        }
        if (count($this->publicaciones) == 0) {
            throw new \Exception("Error en Resumenes, html: La propiedad publicaciones no tiene datos.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Encabezado y título
        if ($this->encabezado != '') {
            $a[] = $this->encabezado;
            if ($this->titulo != '') {
                $a[] = "            <h2 style=\"display:none;\">{$this->titulo}</h2>";
            }
        } elseif ($this->titulo != '') {
            $a[] = "            <h2>{$this->titulo}</h2>";
        }
        // Iniciar contador
        $contador = 0;
        // Acumular
        foreach ($this->publicaciones as $p) {
            // Validar
            if (!is_object($p)) {
                throw new \Exception("Error en Resumenes, html: Una publicación no es una instancia.");
            }
            if (!($p instanceof Publicacion)) {
                throw new \Exception("Error en Resumenes, html: Una publicación no es una instancia de Publicacion.");
            }
            // Pasar la bandera en_raiz
            $p->en_raiz = $this->en_raiz;
            // Acumular
            $contador++;
            $a[] = '            <div class="media breve">';
            if ($p->imagen_previa != '') {
                $a[] = sprintf('              <a class="pull-left" href="%s"><img class="media-object" src="%s"></a>', $p->url(), $p->imagen_previa_url());
            }
            $a[] = '              <div class="media-body">';
            $a[] = sprintf('                <h3 class="media-heading breve-heading"><a href="%s">%s</a></h3>', $p->url(), $p->nombre);
            $a[] = sprintf('                <p class="descripcion">%s</p>', $p->descripcion);
            $a[] = sprintf('                <p class="pull-left autor">%s</p>', $p->autor);
          //$a[] = sprintf('                <p class="pull-right leer-mas"><a href="%s">Leer más</a></p>', $p->url());
            $a[] = '              </div>';
            $a[] = '            </div>';
            // Terminar bucle al alcanzar el máximo
            if ($contador >= $this->cantidad_maxima) break;
        }
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase Resumenes

?>
