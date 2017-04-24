<?php
/**
 * Sitio Web - Índice de Competitividad Urbana 2016
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace SalaPrensa;

/**
 * Clase IndiceDeCompetitividadUrbana2016
 */
class IndiceDeCompetitividadUrbana2016 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Índice de Competitividad Urbana 2016';
    //  $this->autor                      = '';
        $this->fecha                      = '2016-09-07T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-09-07-indice-de-competitividad-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Zona Metropolitana de La Laguna pasó del lugar 48 en el ICU 2014 al lugar 24 en competitividad.';
        $this->claves                     = 'IMPLAN, Torreon, Competitividad, Urbana, 2016, IMCO, ICU';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/IndiceDeCompetitividadUrbana2016.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Índice de Competitividad Urbana');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IndiceDeCompetitividadUrbana2016

?>
