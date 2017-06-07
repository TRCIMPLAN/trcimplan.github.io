<?php
/**
 * TrcIMPLAN Sitio Web - Usos y actividades en el Centro Histórico de Torreón
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
 * Clase UsosYActividadesEnElCentroHistoricoDeTorreon
 */
class UsosYActividadesEnElCentroHistoricoDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Usos y actividades en el Centro Histórico de Torreón';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2016-02-18T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'usos-y-actividades-en-el-centro-historico-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El uso que le da la gente a espacios como la Plaza de Armas y el Mercado Juárez, ya sea de descanso, de consumo o de transporte, ofrece un panorama de cómo mejorar la vida en el perímetro del centro.';
        $this->claves                     = 'IMPLAN, Torreon, Centro, Historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UsosYActividadesEnElCentroHistoricoDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Doing Business', 'Empresas', 'Mercados');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase UsosYActividadesEnElCentroHistoricoDeTorreon

?>
