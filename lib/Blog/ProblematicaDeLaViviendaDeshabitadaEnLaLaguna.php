<?php
/**
 * TrcIMPLAN Sitio Web - ProblematicaDeLaViviendaDeshabitadaEnLaLaguna
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
 * Clase ProblematicaDeLaViviendaDeshabitadaEnLaLaguna
 */
class ProblematicaDeLaViviendaDeshabitadaEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Problemática de la vivienda deshabitada en La Laguna';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2017-03-16T10:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'problematica-de-la-vivienda-deshabitada-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Tan sólo en la Ciudad de Torreón existen alrededor de 51,515 viviendas desocupadas. El sector Oriente es el que presenta el mayor índice con colonias donde el problema asciende a más del 50%.';
        $this->claves                     = 'IMPLAN, Torreon, Vivienda, Deshabitada, Comisión Nacional de la Vivienda';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProblematicaDeLaViviendaDeshabitadaEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ProblematicaDeLaViviendaDeshabitadaEnLaLaguna

?>
