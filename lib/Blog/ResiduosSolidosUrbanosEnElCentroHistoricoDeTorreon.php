<?php
/**
 * TrcIMPLAN Sitio Web - ResiduosSolidosUrbanosEnElCentroHistoricoDeTorreon
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
 * Clase ResiduosSolidosUrbanosEnElCentroHistoricoDeTorreon
 */
class ResiduosSolidosUrbanosEnElCentroHistoricoDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residuos Sólidos Urbanos en el Centro Histórico de Torreón';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2018-10-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'residuos-solidos-urbanos-en-centro-historico-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón se producen 205,849 toneladas anuales de basura, de las cuales 4,956 se generan en el primer cuadro de la ciudad, es decir el 2.4% de los residuos municipales de tipo basura doméstica y basura comercial se producen en el Centro Histórico de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, basura torreon, basura centro historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ResiduosSolidosUrbanosEnElCentroHistoricoDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente');
        $this->fuentes                    = array('conapo', 'IMPLAN','direccion de limpieza');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ResiduosSolidosUrbanosEnElCentroHistoricoDeTorreon

?>
