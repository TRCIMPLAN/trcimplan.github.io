<?php
/**
 * TrcIMPLAN Sitio Web - Alumnos por docente, indicador clave para la mejora de la educación (primera parte)
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
 * Clase CrecimientoPoblacionalEnTorreon
 */
class CrecimientoPoblacionalEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Crecimiento Poblacional en Torreón';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2018-07-23T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'crecimiento-poblacional-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón aún no es una población envejecida, no obstante el crecimiento de este sector es innegable y la ciudad debe prepararse para enfrentar esta situación en el futuro próximo.';
        $this->claves                     = 'IMPLAN, Torreón, Población';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CrecimientoPoblacionalEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Población');
        $this->fuentes                    = array('INEGI', 'CONAPO');
        $this->regiones                   = array('Torreón', 'Coahuila', 'Nacional');
    } // constructor

} // Clase AlumnosPorDocenteParte1

?>
