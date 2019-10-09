<?php
/**
 * TrcIMPLAN Sitio Web - GestionYCambiosDeUsoDeSueloEnTorreon
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
 * Clase GestionYCambiosDeUsoDeSueloEnTorreon
 */
class GestionYCambiosDeUsoDeSueloEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Gestión y Cambios de Usos de Suelo en Torreón';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2019-10-09T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'gestion-y-cambios-de-uso-de-suelo-en-torreon-oct2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Por uso de suelo se entiende a la gestión y modificación de las actividades que se realizan en un predio o terreno que es parte del territorio de una administración política, ligado a este se encuentra la planeación urbana que permite regular los usos de suelo de los predios a partir de restricciones y reglamentos que ayudan a controlar, ordenar y dirigir el desarrollo urbano de una ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, uso de suelo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/GestionYCambiosDeUsoDeSueloEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('Desarrollo urbano Torreon', 'IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase GestionYCambiosDeUsoDeSueloEnTorreon

?>
