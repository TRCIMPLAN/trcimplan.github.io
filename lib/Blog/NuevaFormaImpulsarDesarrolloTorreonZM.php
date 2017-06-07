<?php
/**
 * TrcIMPLAN Sitio Web - Una nueva forma de impulsar el desarrollo de Torreón y su Zona Metropolitana
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
 * Clase NuevaFormaImpulsarDesarrolloTorreonZM
 */
class NuevaFormaImpulsarDesarrolloTorreonZM extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Una nueva forma de impulsar el desarrollo de Torreón y su Zona Metropolitana';
        $this->autor                      = 'Arq. Susana Montano';
        $this->fecha                      = '2014-11-11T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'nueva-forma-impulsar-desarrollo-torreon-zm';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'El IMPLAN Torreón promueve el impulso del desarrollo integral de la Laguna, mediante la integración de una Cartera de Proyectos Estratégicos.';
        $this->claves                     = 'IMPLAN, Torreon, Proyectos, Estrategicos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/NuevaFormaImpulsarDesarrolloTorreonZM.html';
        // Para el Organizador
        $this->categorias                 = array('Gobierno');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase NuevaFormaImpulsarDesarrolloTorreonZM

?>
