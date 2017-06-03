<?php
/**
 * TrcIMPLAN Sitio Web - Coahuila y Torreón avanzan en el ranking Doing Business
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
 * Clase CoahuilaYTorreonAvanzanEnElRankingDoingBusiness
 */
class CoahuilaYTorreonAvanzanEnElRankingDoingBusiness extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Coahuila y Torreón avanzan en el ranking Doing Business';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2016-09-28T15:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'coahuila-y-torreon-avanzan-en-el-ranking-doing-business';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el reporte Doing Business en México 2016 Coahuila califica en el lugar 17 de los 32 estados de la República. El estado, evaluado a través del municipio de Torreón, destacó en el indicador Cumplimiento de contratos ocupando el séptimo lugar del país.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CoahuilaYTorreonAvanzanEnElRankingDoingBusiness.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Doing Business');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Coahuila');
    } // constructor

} // Clase CoahuilaYTorreonAvanzanEnElRankingDoingBusiness

?>
