<?php
/**
 * TrcIMPLAN Sitio Web - IncrementoDeLasEnfermedadesCronicasEnLaLaguna
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
 * Clase IncrementoDeLasEnfermedadesCronicasEnLaLaguna
 */
class IncrementoDeLasEnfermedadesCronicasEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Incremento de las enfermedades crónicas en La Laguna.';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2019-07-17T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'incremento-de-las-enfermedades-cronicas-en-la-Laguna-julio2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La evolución de las principales enfermedades indica que cada vez hay más afectaciones de tipo crónico no transmisibles, en La Laguna, esto se ve reflejado en que las principales causas de hospitalización para ambos sexos son la enfermedad renal, diabetes mellitus y colelitiasis. Y las afecciones que más decesos provocan tienen que ver con enfermedades endócrinas y metabólicas, así como con enfermedades isquémicas del corazón. ';
        $this->claves                     = 'IMPLAN, Torreon, enfermedades, hospitalizacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IncrementoDeLasEnfermedadesCronicasEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IncrementoDeLasEnfermedadesCronicasEnLaLaguna

?>
