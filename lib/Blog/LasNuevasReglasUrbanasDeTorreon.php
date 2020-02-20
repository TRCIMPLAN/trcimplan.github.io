<?php
/**
 * TrcIMPLAN Sitio Web - LasNuevasReglasUrbanasDeTorreon
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
 * Clase LasNuevasReglasUrbanasDeTorreon
 */
class LasNuevasReglasUrbanasDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las Nuevas Reglas Urbanas de Torreón';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2020-02-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'las-nuevas-reglas-urbanas-de-torreon-feb2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“Consejeros del IMPLAN, universidades, colegios de profesionistas, cámaras y organismos empresariales realizaron más de 460 observaciones al Reglamento de Desarrollo Urbano y Construcción de Torreón”.';
        $this->claves                     = 'IMPLAN, Torreon, reglas urbanas, reglamento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LasNuevasReglasUrbanasDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar','Gobierno');
        $this->fuentes                    = array('Carrión, F. & Erazo J','Rabello');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LasNuevasReglasUrbanasDeTorreon

?>
