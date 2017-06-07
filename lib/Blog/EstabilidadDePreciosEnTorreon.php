<?php
/**
 * TrcIMPLAN Sitio Web - Estabilidad de Precios en Torreón
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
 * Clase EstabilidadDePreciosEnTorreon
 */
class EstabilidadDePreciosEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Estabilidad de Precios en Torreón';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-04-25T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'estabilidad-de-precios-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En términos generales la inflación de Torreón se encuentra estable, lo cual genera certidumbre tanto a planta productiva local como extranjera.';
        $this->claves                     = 'IMPLAN, Torreon, Inflación, Productividad, Laboral';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/EstabilidadDePreciosEnTorreon.html';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Macroeconomía', 'Mercados');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Nacional');
    } // constructor

} // Clase EstabilidadDePreciosEnTorreon

?>
