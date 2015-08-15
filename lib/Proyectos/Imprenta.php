<?php
/*
 * TrcIMPLAN - Proyectos Imprenta
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
 * @package TrcIMPLAN
 */

namespace Proyectos;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'Proyectos';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Proyectos Estratégicos';
        $this->descripcion              = 'Información y seguimiento de los Proyectos Estratégicos del IMPLAN Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Banco, Municipal, Proyectos, Estrategicos';
        $this->encabezado_color         = '#5A1E81';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'Proyectos Estratégicos';
        // Clase que concentrará a las publicaciones para hacer su propia página
        $this->concentrador             = 'Tarjetas'; // Puede ser Indice (por defecto), Galeria o Tarjetas
        // La ruta al archivo con el índice/galería/tarjetas que será creado
        $this->directorio               = 'proyectos';
        $this->archivo_ruta             = 'proyectos/index.html';
    } // constructor

} // Clase Imprenta

?>
