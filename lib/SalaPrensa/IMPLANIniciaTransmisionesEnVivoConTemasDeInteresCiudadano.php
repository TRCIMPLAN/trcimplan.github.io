<?php
/**
 * TrcIMPLAN Sitio Web - IMPLAN inicia transmisiones en vivo con temas de interés ciudadano
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
 * Clase IMPLANIniciaTransmisionesEnVivoConTemasDeInteresCiudadano
 */
class IMPLANIniciaTransmisionesEnVivoConTemasDeInteresCiudadano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN inicia transmisiones en vivo con temas de interés ciudadano';
    //~ $this->autor                      = '';
        $this->fecha                      = '2017-02-21T14:40';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-02-21-implan-inicia-transmisiones-en-vivo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con el fin de dar difusión a los temas que involucran el futuro de la ciudad, el IMPLAN ha iniciado una serie de transmisiones en vivo a través de su página de Facebook.';
        $this->claves                     = 'IMPLAN, Torreon, Tramisiones, En vivo';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/IMPLANIniciaTransmisionesEnVivoConTemasDeInteresCiudadano.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase IMPLANIniciaTransmisionesEnVivoConTemasDeInteresCiudadano

?>
