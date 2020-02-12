<?php
/**
 * TrcIMPLAN Sitio Web - RiesgosYVulnerabilidadEnLaZonaMetropolitanaDeLaLaguna
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
 * Clase RiesgosYVulnerabilidadEnLaZonaMetropolitanaDeLaLaguna
 */
class RiesgosYVulnerabilidadEnLaZonaMetropolitanaDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Riesgos y Vulnerabilidad en la Zona Metropolitana de La Laguna';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2020-02-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'riesgos-y-vulnerabilidad-en-la-zml-feb2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Centro Nacional de Prevención de Desastres (CENAPRED) define el peligro como la probabilidad de ocurrencia de un evento que se presenta en la naturaleza o que tiene un origen antropogénico, que, por su energía y persistencia, puede ocasionar un desastre.';
        $this->claves                     = 'IMPLAN, Torreon, prevencion, desastres';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RiesgosYVulnerabilidadEnLaZonaMetropolitanaDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar');
        $this->fuentes                    = array('CENAPRED');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase RiesgosYVulnerabilidadEnLaZonaMetropolitanaDeLaLaguna

?>
