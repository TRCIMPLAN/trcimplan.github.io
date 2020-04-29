<?php
/**
 * TrcIMPLAN Sitio Web - ValorDelSueloEnElCentroHistoricoDeTorreon
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
 * Clase ValorDelSueloEnElCentroHistoricoDeTorreon
 */
class ValorDelSueloEnElCentroHistoricoDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Valor del suelo en el Centro Histórico de Torreón';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2020-04-29T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'valor-del-suelo-en-el-centro-historico-de-torreon-abril-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las infraestructuras y la expedición de la norma urbanística generan valor en el inmueble y, consecuentemente, riqueza a su propietario. (Montaña, C. 2013).';
        $this->claves                     = 'IMPLAN, Torreon, centro historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ValorDelSueloEnElCentroHistoricoDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ValorDelSueloEnElCentroHistoricoDeTorreon

?>
