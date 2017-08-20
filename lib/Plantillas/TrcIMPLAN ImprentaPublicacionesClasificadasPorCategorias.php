<?php
/**
 * TrcIMPLAN Sitio Web - Imprenta Publicaciones Clasificadas por Categorías
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

namespace DIRECTORIO;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicacionesClasificadasPorCategorias {ob}

    /**
     * Constructor
     */
    public function __construct() {ob}
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio  = 'DIRECTORIO';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                    = 'Título';
        $this->descripcion               = 'Descripción.';
        $this->claves                    = 'Clave1, Clave2, Clave3';
    //~ $this->encabezado_color          = '#FFFFFF';
        // Parámetros que el Recolector definirá en las Publicaciones si éstas no los tienen
    //~ $this->autor                     = '';
    //~ $this->aparece_en_pagina_inicial = TRUE;
    //~ $this->para_compartir            = TRUE;
    //~ $this->imagen                    = '../imagenes/imagen.jpg';
    //~ $this->imagen_previa             = '../imagenes/imagen-previa.jpg';
    //~ $this->poner_imagen_en_contenido = TRUE;
        $this->nombre_menu               = 'Menú > Submenú';
        // Ruta a la clase para hacer las páginas con los índices
        $this->indices_paginas           = '\\Base\\PaginasDetallados'; // Puede ser \Base\PaginasDetallados, \Base\PaginasGalerias, \Base\PaginasListado o \Base\PaginasTarjetas
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio                = 'directorio';
        // Pasar a la página índice estos parámetros
        $this->ultimas_encabezado        = 'Últimas publicaciones';
        $this->ultimas_concentrador      = '\\Base\\VinculosDetallados';
        $this->ultimas_cantidad          = 8;
        $this->categorias_encabezado     = 'Categorías';
        $this->categorias_concentrador   = '\\Base\\VinculosCompactos';
        // Nivel es el orden de la rama para los índices por autores y categorías, debe ser un entero grande
        $this->nivel                     = 00000;
        // Ejecutar constructor en el padre
        parent::__construct();
    {cb} // constructor

{cb} // Clase Imprenta

?>
