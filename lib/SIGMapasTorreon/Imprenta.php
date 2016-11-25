<?php
/*
 * TrcIMPLAN Sitio Web - SIGMapasTorreon Imprenta
 *
 * Copyright (C) 2016 IMPLAN Torreón
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

namespace SIGMapasTorreon;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicacionesClasificadasPorCategorias {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene las clases con las publicaciones
        $this->publicaciones_directorio = 'SIGMapasTorreon';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                   = 'Sistema de Información Geográfica de Torreón';
        $this->descripcion              = 'Mapas con información georreferenciada para Torreón';
        $this->claves                   = 'IMPLAN, Torreon, Información, Geográfica, Torreón';
        $this->encabezado_color         = '#008000';
        // Opción de Navegación a poner activa
        $this->nombre_menu              = 'Información Geográfica > Mapas de Torreón';
        // Ruta a la clase para hacer las páginas con los índices
        $this->indices_paginas          = '\\Base\\PaginasTarjetas'; // Puede ser \Base\PaginasDetallados, \Base\PaginasGalerias, \Base\PaginasListado o \Base\PaginasTarjetas
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'sig-mapas-torreon';
        // Pasar a la página índice estos parámetros
        $this->ultimas_encabezado       = 'Últimos mapas del SIG Torreón';
        $this->ultimas_vinculos         = '\\Base\\VinculosTarjetas';
        $this->ultimas_cantidad         = 4;
        $this->categorias_encabezado    = 'Todos los mapas clasificados por categorías';
        $this->categorias_vinculos      = '\\Base\\VinculosCompactos';
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
