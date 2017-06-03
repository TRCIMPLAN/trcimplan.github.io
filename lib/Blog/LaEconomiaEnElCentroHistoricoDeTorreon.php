<?php
/**
 * TrcIMPLAN Sitio Web - La economía en el Centro Histórico de Torreón
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
 * Clase LaEconomiaEnElCentroHistoricoDeTorreon
 */
class LaEconomiaEnElCentroHistoricoDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La economía en el Centro Histórico de Torreón';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2016-08-24T14:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-economia-en-el-centro-historico-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este sector de la ciudad comprende 241 manzanas y concentra más del 15% de la actividad económica de Torreón, con fuerte presencia de negocios semifijos. Las políticas de crecimiento del centro, se deben dirigir a incentivar el comercio formal, un mayor uso habitacional y a la protección, restauración y conservación de edificios y plazas.';
        $this->claves                     = 'IMPLAN, Torreon, Centro Historico, Economia, Negocios';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/LaEconomiaEnElCentroHistoricoDeTorreon.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Empresas', 'Mercados');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaEconomiaEnElCentroHistoricoDeTorreon

?>
