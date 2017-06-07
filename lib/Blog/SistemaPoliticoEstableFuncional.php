<?php
/**
 * TrcIMPLAN Sitio Web - Sistema Político Estable y Funcional
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
 * Clase SistemaPoliticoEstableFuncional
 */
class SistemaPoliticoEstableFuncional extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sistema Político Estable y Funcional';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-06-10T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'sistema-politico-estable-funcional';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Sistema Político Estable y Funcional es el subíndice mejor calificado de la zona metropolitana, ya que IMCO nos sitúa en el lugar 11 del ranking.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/SistemaPoliticoEstableFuncional.html';
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Participación Ciudadana');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase SistemaPoliticoEstableFuncional

?>
