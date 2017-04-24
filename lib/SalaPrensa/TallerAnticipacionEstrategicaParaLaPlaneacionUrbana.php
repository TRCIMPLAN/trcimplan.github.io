<?php
/**
 * TrcIMPLAN Sitio Web - TallerAnticipacionEstrategicaParaLaPlaneacionUrbana
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

namespace SalaPrensa;

/**
 * Clase TallerAnticipacionEstrategicaParaLaPlaneacionUrbana
 */
class TallerAnticipacionEstrategicaParaLaPlaneacionUrbana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN asiste al taller Anticipación Estratégica para la Planeación Urbana';
    //~ $this->autor                      = '';
        $this->fecha                      = '2017-03-07T12:16';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-03-07-taller-anticipacion-estrategica-para-la-planeacion-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En León, Guanajuato; los expertos en prospectiva e inteligencia estratégica nos mostraron cómo analizar el futuro de las ciudades para poder modificarlo en el presente.';
        $this->claves                     = 'IMPLAN, Torreon, Prospectiva, Inteligencia, Estrategica, Anticipacion, Planeacion';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/TallerAnticipacionEstrategicaParaLaPlaneacionUrbana.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TallerAnticipacionEstrategicaParaLaPlaneacionUrbana

?>
