<?php
/*
 * TrcIMPLAN Sitio Web - Blog Imprenta
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

namespace Blog;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicacionesClasificadasPorCategorias {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene las clases con las publicaciones
        $this->publicaciones_directorio  = 'Blog';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                    = 'Análisis Publicados';
        $this->descripcion               = 'A través de los análisis se logra ampliar el conocimiento y ofrecer recomendaciones documentadas de las temáticas del IMPLAN.';
        $this->claves                    = 'IMPLAN, Torreon, Analisis, Publicaciones, Estudios, Investigacion';
        // Parámetros que el Recolector definirá en las Publicaciones si éstas no los tienen
        $this->aparece_en_pagina_inicial = TRUE;
        $this->autor                     = 'IMPLAN Staff';
        $this->para_compartir            = TRUE;
        $this->imagen                    = '../imagenes/imagen.jpg';
        $this->imagen_previa             = '../imagenes/imagen-previa.jpg';
        $this->poner_imagen_en_contenido = TRUE;
        $this->nombre_menu               = 'Análisis Publicados';
        // Ruta a la clase para hacer la página con el índice
        $this->indices_paginas           = '\\Base\\PaginasDetallados';
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio                = 'blog';
        // Pasar a la página índice estos parámetros
        $this->ultimas_encabezado        = 'Últimos análisis publicados';
        $this->ultimas_vinculos          = '\\Base\\VinculosDetallados';
        $this->ultimas_cantidad          = 8;
        $this->categorias_encabezado     = 'Todos los análisis clasificados por categorías';
        $this->categorias_vinculos       = '\\Base\\VinculosCompactos';
        // Nivel es el orden de la rama para los índices por autores y categorías, debe ser grande
        $this->nivel                     = 10000;
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
