<?php
/**
 * TrcIMPLAN Sitio Web - Mapa
 *
 * Copyright (C) 2015 IMPLAN Torreón
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

namespace PaginaInicial;

/**
 * Clase Mapa
 */
class Mapa {

    public $titulo;
    public $opciones;

    /**
     * Constructor
     */
    public function __construct($in_titulo, $in_opciones) {
        $this->titulo   = $in_titulo;
        $this->opciones = $in_opciones;
    } // constructor

    /**
     * Mapa Grande HTML
     *
     * @return string Código HTML
     */
    public function grande_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = "        <h4 class=\"mapa-encabezado\">{$this->titulo}</h4>";
        $a[] = '        <ul>';
        foreach ($this->opciones as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https):\/\/.+/', $vinculo)) {
                $a[] = "          <li><a href=\"$vinculo\" target=\"_blank\">$etiqueta</a></li>";
            } else {
                $a[] = "          <li><a href=\"$vinculo\">$etiqueta</a></li>";
            }
        }
        $a[] = '        </ul>';
        // Entregar
        return implode("\n", $a);
    } // grande_html

    /**
     * Mapa Chico HTML
     *
     * @return string Código HTML
     */
    public function chico_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = "        <h4 class=\"mapa-encabezado\">{$this->titulo}</h4>";
        $b   = array();
        foreach ($this->opciones as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https):\/\/.+/', $vinculo)) {
                $b[] = "<a href=\"$vinculo\" target=\"_blank\">$etiqueta</a>";
            } else {
                $b[] = "<a href=\"$vinculo\">$etiqueta</a>";
            }
        }
        $a[] = sprintf('    <p>%s</p>', implode(', ', $b));
        // Entregar
        return implode("\n", $a);
    } // chico_html

} // Clase Mapa

?>
