<?php
/**
 * TrcIMPLAN Sitio Web - DiaDeLaFelicidad
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
 * Clase DiaDeLaFelicidad
 */
class DiaDeLaFelicidad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Coahuila ocupa primeros lugares en Felicidad.';
        $this->autor                      = 'Ing. José Juan Astorga Cabrales';
        $this->fecha                      = '2022-03-22T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'dia-de-la-felicidad-marzo-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Desde 2013, las Naciones Unidas celebra cada 20 de marzo el Día Internacional de la Felicidad como una forma de reconocer el importante papel que desempeña en la vida de las personas.';
        $this->claves                     = 'IMPLAN, Torreon, felicidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DiaDeLaFelicidad.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar');
        $this->fuentes                    = array('ENBIARE');
        $this->regiones                   = array('Torreón', 'Matamoros');
    } // constructor

} // Clase DiaDeLaFelicidad

?>
