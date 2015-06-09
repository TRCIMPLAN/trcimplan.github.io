<?php
/**
 * TrcIMPLAN - SMI Indicadores Gómez Palacio Imprenta (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'SMIIndicadoresGomezPalacio';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Indicadores de Gómez Palacio';
        $this->descripcion              = 'Sistema Metropolitano de Indicadores, Región Gómez Palacio';
        $this->claves                   = 'IMPLAN, SMI, Indicadores, Metropolitanos, Gómez Palacio';
        $this->encabezado_color         = '#CA198A';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'Indicadores > Indicadores por Región';
        // Clase que concentrará a las publicaciones para hacer su propia página
        $this->concentrador             = 'Indice';
        // La ruta al archivo con el índice/galería que será creado
        $this->directorio               = 'indicadores-gomez-palacio';
        $this->archivo_ruta             = 'indicadores-gomez-palacio/index.html';
    } // constructor

} // Clase Imprenta

?>