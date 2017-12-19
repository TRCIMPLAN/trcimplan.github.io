<?php
/**
 * TrcIMPLAN Sitio Web - ElPotencialDelBiogasComoFuenteDeEnergiaAlternativa
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
 * Clase ElPotencialDelBiogasComoFuenteDeEnergiaAlternativa
 */
class ElPotencialDelBiogasComoFuenteDeEnergiaAlternativa extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El potencial del biogás como fuente de energía alternativa';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2017-12-19T15:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-potencial-del-biogas-como-fuente-de-energia-alternativa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Coahuila como estado y la Comarca Lagunera como región, se encuentran entre los primeros lugares a nivel nacional con mayores cabezas de ganado bovino. Las empresas ganaderas pueden aprovechar todo el estiércol generado a diario por el ganado para producir energías alternativas.';
        $this->claves                     = 'IMPLAN, Torreon, Biogas, Energia, Alternativa, Sustentable';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElPotencialDelBiogasComoFuenteDeEnergiaAlternativa.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Recursos Naturales');
        $this->fuentes                    = array('ONU-Habitat');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElPotencialDelBiogasComoFuenteDeEnergiaAlternativa

?>
