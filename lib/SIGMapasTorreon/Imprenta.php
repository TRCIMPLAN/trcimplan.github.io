<?php
/**
 * TrcIMPLAN - SIG Mapas Imprenta
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
namespace SIGMapasTorreon;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'SIGMapasTorreon';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Sistema de Información Geográfica de Torreón';
        $this->descripcion              = 'Mapas con información georreferenciada para Torreón';
        $this->claves                   = 'IMPLAN, SIG, Información, Geográfica, Torreón';
        $this->encabezado_color         = '#008000';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'Información Geográfica > S.I.G. de Torreón';
        // Clase que concentrará a las publicaciones para hacer su propia página
        $this->concentrador             = 'Tarjetas';
        // La ruta al archivo con el índice/galería que será creado
        $this->directorio               = 'sig-mapas-torreon';
        $this->archivo_ruta             = 'sig-mapas-torreon/index.html';
    } // constructor

} // Clase Imprenta

?>
