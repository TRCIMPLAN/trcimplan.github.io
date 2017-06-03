<?php
/**
 * TrcIMPLAN Sitio Web - Ciudades 24/7 como estrategia para revitalizar el espacio urbano
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

namespace Blog;

/**
 * Clase Ciudades247ComoEstrategiaParaRevitalizarElEspacioUrbano
 */
class Ciudades247ComoEstrategiaParaRevitalizarElEspacioUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudades 24/7 como estrategia para revitalizar el espacio urbano';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2015-10-15T08:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudades-24-7-como-estrategia-para-revitalizar-el-espacio-urbano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El reto para nuestras ciudades está en desarrollar políticas que humanicen y promuevan la noche como un espacio social positivo y menos restringido.';
        $this->claves                     = 'IMPLAN, Torreon, Espacios, Urbanos, Sociales, Vida, Nocturna, Empleo, Cultura';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/Ciudades247ComoEstrategiaParaRevitalizarElEspacioUrbano.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Cultura', 'Empleo');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase Ciudades247ComoEstrategiaParaRevitalizarElEspacioUrbano

?>
