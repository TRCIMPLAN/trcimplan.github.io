<?php
/**
 * TrcIMPLAN Sitio Web - Los Barrios Tradicionales en el Centro Histórico de Torreón
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
 * Clase LosBarriosTradicionalesEnElCentroHistoricoDeTorreon
 */
class LosBarriosTradicionalesEnElCentroHistoricoDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Barrios Tradicionales en el Centro Histórico de Torreón';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2017-03-24T13:35';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-barrios-tradicionales-en-el-centro-historico-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Actualmente existen diez barrios que aunque han sufrido una pérdida sostenida de identidad debido a la destrucción de sus edificaciones originales así como la migración de su población, son considerados como tradicionales.';
        $this->claves                     = 'IMPLAN, Torreon, Barrios, Edificios, Antiguo, Tradicional, Historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LosBarriosTradicionalesEnElCentroHistoricoDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vivienda');
        $this->fuentes                    = array('Ayuntamiento de Torreón');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LosBarriosTradicionalesEnElCentroHistoricoDeTorreon

?>
