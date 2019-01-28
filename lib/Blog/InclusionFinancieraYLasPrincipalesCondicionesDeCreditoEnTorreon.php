<?php
/**
 * TrcIMPLAN Sitio Web - InclusionFinancieraYLasPrincipalesCondicionesDeCreditoEnTorreon
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
 * Clase InclusionFinancieraYLasPrincipalesCondicionesDeCreditoEnTorreon
 */
class InclusionFinancieraYLasPrincipalesCondicionesDeCreditoEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Inclusión Financiera y las Principales Condiciones de Crédito en Torreón';
        $this->autor                      = 'Lic. Frida Valeria García Gutiérrez';
        $this->fecha                      = '2019-01-28T00:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'inclusion-financiera-y-las-principales-condiciones-de-credito-en-torreon-ene2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón, la población adulta con probabilidades de adquirir un crédito o contratar otro instrumento financiero, representa más del 60% de los habitantes del municipio para 2015, de acuerdo con datos de población de la encuesta intercensal.';
        $this->claves                     = 'IMPLAN, Torreon, Inclusion financiera, Credito en torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InclusionFinancieraYLasPrincipalesCondicionesDeCreditoEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar');
        $this->fuentes                    = array('ENIF');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase InclusionFinancieraYLasPrincipalesCondicionesDeCreditoEnTorreon

?>
