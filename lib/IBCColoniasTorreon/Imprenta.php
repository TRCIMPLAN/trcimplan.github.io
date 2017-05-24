<?php
/**
 * TrcIMPLAN Sitio Web - Imprenta
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace IBCColoniasTorreon;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'IBCColoniasTorreon';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Colonias de Torreón';
        $this->descripcion              = 'Indicadores Básicos por Colonias de Torreón, Coahuila de Zaragoza.';
        $this->claves                   = 'IMPLAN, Torreon, Indicadores, Colonias, Torreón';
    //~ $this->encabezado_color         = '';
        // Opción de navegación a poner como activa
        $this->nombre_menu              = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Ruta a la clase para hacer la página con el índice
        $this->indices_paginas          = '\\Base\\PaginasListadoAlfabetico';
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'ibc-colonias-torreon';
        // Nivel es el orden de la rama para los índices por autores y categorías, debe ser un entero grande
        $this->nivel                    = 80000;
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
