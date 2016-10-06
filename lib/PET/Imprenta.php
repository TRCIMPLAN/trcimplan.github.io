<?php
/*
 * TrcIMPLAN - Imprenta
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace PET;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'PET';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Plan Estratégico Torreón con Enfoque Metropolitano 2040';
        $this->descripcion              = 'Resultados de los talleres del Plan Estratégico Metropolitano.';
        $this->claves                   = 'IMPLAN, Torreon, Plan Estrategico Torreon 2040';
        $this->encabezado_color         = '#008000';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'Plan Estratégico Torreón';
        // Clase que concentrará a las publicaciones para hacer su propia página
        $this->concentrador             = 'Tarjetas';
        // La ruta al archivo con el índice/galería que será creado
        $this->directorio               = 'plan-estrategico-torreon-enfoque-metropolitano-2040';
        $this->archivo_ruta             = 'plan-estrategico-torreon-enfoque-metropolitano-2040/index.html';
    } // constructor

} // Clase Imprenta

?>
