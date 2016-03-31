<?php
/*
 * TrcIMPLAN - Imprenta
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
namespace SIGPlanes;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'SIGPlanes';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Planes';
        $this->descripcion              = 'Documentos oficiales que tienen que ver con desarrollo urbano.';
        $this->claves                   = 'IMPLAN, Torreon, Planes, Documentos, Reglamentos';
        $this->encabezado_color         = '#008000';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'Información Geográfica > Planes';
        // Clase que concentrará a las publicaciones para hacer su propia página
        $this->concentrador             = 'Indice';
        // La ruta al archivo con el índice/galería que será creado
        $this->directorio               = 'sig-planes';
        $this->archivo_ruta             = 'sig-planes/index.html';
    } // constructor

} // Clase Imprenta

?>
