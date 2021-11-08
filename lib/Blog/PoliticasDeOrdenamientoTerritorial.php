<?php
/**
 * TrcIMPLAN Sitio Web - PoliticasDeOrdenamientoTerritorial
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
 * Clase PoliticasDeOrdenamientoTerritorial
 */
class PoliticasDeOrdenamientoTerritorial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Políticas De Ordenamiento Territorial Para Enfrentar Los Problemas Estructurales De Torreón.';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2021-11-08T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'politicas-de-ordenamiento-territorial-nov-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“Del 2015 a noviembre del 2021 el R. Ayuntamiento de Torreón autorizó un total de 54 nuevos fraccionamientos habitacionales y 1 fraccionamiento de tipo industrial”.';
        $this->claves                     = 'IMPLAN, Torreon, ordenamiento, territorial, fraccionamientos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PoliticasDeOrdenamientoTerritorial.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vivienda');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PoliticasDeOrdenamientoTerritorial

?>
