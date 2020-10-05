<?php
/**
 * TrcIMPLAN Sitio Web - EleccionesCoahuila2020VotosYContingencia
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
 * Clase EleccionesCoahuila2020VotosYContingencia
 */
class EleccionesCoahuila2020VotosYContingencia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Elecciones Coahuila 2020: Votos y Contingencia';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-10-05T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'elecciones-coahuila-2020-votos-y-contingencia-oct-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 17 de marzo de 2020, la Junta General Ejecutiva (JGE) del Instituto Nacional Electoral aprobó mediante Acuerdo INE/JGE34/2020, las medidas preventivas y de actuación, con motivo de la pandemia derivada del COVID-19.';
        $this->claves                     = 'IMPLAN, Torreon, pandemia, covid-19, ine';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EleccionesCoahuila2020VotosYContingencia.md';
        // Para el Organizador
        $this->categorias                 = array('Salud', 'Gobierno');
        $this->fuentes                    = array('INE');
        $this->regiones                   = array('Torreón', 'Matamoros');
    } // constructor

} // Clase EleccionesCoahuila2020VotosYContingencia

?>
