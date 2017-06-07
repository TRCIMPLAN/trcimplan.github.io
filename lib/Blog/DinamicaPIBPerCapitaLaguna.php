<?php
/**
 * TrcIMPLAN Sitio Web - Dinámica del PIB per cápita de La Laguna (IRAEs Banamex 2011,2014)
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
 * Clase DinamicaPIBPerCapitaLaguna
 */
class DinamicaPIBPerCapitaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Dinámica del PIB per cápita de La Laguna (IRAEs Banamex 2011,2014)';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2014-09-26T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'dinamica-pib-per-capita-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Entre los indicadores Banamex de 2011 y 2014 el PIB per cápita de La Laguna creció 22.82%.';
        $this->claves                     = 'IMPLAN, Torreon, PIB, Laguna';
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html     = 'lib/Blog/DinamicaPIBPerCapitaLaguna.html';
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Macroeconomía');
        $this->fuentes                    = array();
        $this->regiones                   = array('La Laguna');
    } // constructor

} // Clase DinamicaPIBPerCapitaLaguna

?>
