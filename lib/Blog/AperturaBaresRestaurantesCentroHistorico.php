<?php
/**
 * TrcIMPLAN Sitio Web - AperturaBaresRestaurantesCentroHistorico
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
 * Clase AperturaBaresRestaurantesCentroHistorico
 */
class AperturaBaresRestaurantesCentroHistorico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Crece apertura de bares y restaurantes en el Centro Histórico';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2018-06-25T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'apertura-bares-restaurantes-centro-historico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De las 974 licencias otorgadas entre 2015 y 2018,  111 corresponden a restaurantes y bares, un giro que ha tenido auge en los últimos dos años y ha permitido diversificar las actividades de recreación en la zona oriente del Centro Histórico.';
        $this->claves                     = 'IMPLAN, Torreon, Licencias, Centro Historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AperturaBaresRestaurantesCentroHistorico.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas','Doing Business');
        $this->fuentes                    = array('Departamento de Apertura de empresas y Ventanilla Universal de Municipio de Torreón');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase AperturaBaresRestaurantesCentroHistorico

?>
