<?php
/**
 * TrcIMPLAN - SMI Categorías Imprenta (Creado por Central:SmiLanzadera)
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
namespace SMICategorias;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'SMICategorias';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Indicadores por Categoría';
        $this->descripcion              = 'Sistema Metropolitano de Indicadores, Listado de Categorías';
        $this->claves                   = 'IMPLAN, SMI, Indicadores, Metropolitanos';
        $this->encabezado_color         = '#CA198A';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'Indicadores > Indicadores por Categoría';
        // Clase que concentrará a las publicaciones para hacer su propia página
        $this->concentrador             = 'Galeria';
        // La ruta al archivo con el índice/galería que será creado
        $this->directorio               = 'indicadores-categorias';
        $this->archivo_ruta             = 'indicadores-categorias/index.html';
    } // constructor

} // Clase Imprenta

?>
