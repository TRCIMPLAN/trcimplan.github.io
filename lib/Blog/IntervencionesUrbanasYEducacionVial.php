<?php
/**
 * TrcIMPLAN Sitio Web - IntervencionesUrbanasYEducacionVial
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
 * Clase IntervencionesUrbanasYEducacionVial
 */
class IntervencionesUrbanasYEducacionVial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Intervenciones Urbanas y Educación Vial para Transitar Seguros.';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2021-09-02T13:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'intervenciones-urbanas-y-educacion-vial-sep-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cuando hablamos de intervenciones urbanas para mejorar la seguridad vial nos referimos a instalar reductores de velocidad, pintar señalamientos horizontales en las carreteras, instalar señalamientos verticales, ampliar la red de semáforos, implementar pasos de cebra, destinar espacios para ciclovías, etc.';
        $this->claves                     = 'IMPLAN, Torreon, urbanas, velocidad, peatonales, ciclovias';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IntervencionesUrbanasYEducacionVial.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array('insp');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IntervencionesUrbanasYEducacionVial

?>
