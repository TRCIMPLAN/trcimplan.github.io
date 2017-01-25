<?php
/**
 * TrcIMPLAN Sitio Web - SIG Imprenta
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano
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
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'SIGMapasTorreon';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Sistema de Información Geográfica de Torreón';
        $this->descripcion              = 'Mapas con información georreferenciada de Torreón';
        $this->claves                   = 'IMPLAN, SIG, Información, Geográfica, Torreón';
        $this->encabezado_color         = '#646464';
        // Etiqueta de Navegación a poner activa
        $this->nombre_menu              = 'Información Geográfica > Mapas de Torreón';
        // Ruta a la clase para hacer la página con el índice
        $this->indices_paginas          = '\Base\PaginasTarjetas';
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'sig-mapas-torreon';
        // Pasar a la PaginasTarjetas estos parámetros
        $this->ultimas_encabezado       = 'Últimos mapas del SIG Torreón';
        $this->ultimas_vinculos         = '\Base\VinculosTarjetas';
        $this->ultimas_cantidad         = 8;
        $this->categorias_encabezado    = 'Todos los mapas clasificados por categorías';
        $this->categorias_vinculos      = '\Base\VinculosCompactos';
        // Nivel es el orden de la rama para los índices por autores y categorías, debe ser grande
        $this->nivel                    = 30000;
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
