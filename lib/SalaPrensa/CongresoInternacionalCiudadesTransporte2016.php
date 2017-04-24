<?php
/**
 * TrcIMPLAN Sitio Web - IMPLAN Torreón participa en el Congreso Internacional Ciudades y Transporte
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * Clase CongresoInternacionalCiudadesTransporte2016
 */
class CongresoInternacionalCiudadesTransporte2016 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN Torreón participa en el Congreso Internacional Ciudades y Transporte';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-10-12T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-10-12-congreso-internacional-ciudades-transporte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El director de planeación Luis Campos participó como ponente en el panel "Gobiernos Abiertos: experiencias y lecciones aprendidas en ciudades mexicanas".';
        $this->claves                     = 'IMPLAN, Torreon, Gobierno, Abierto';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/CongresoInternacionalCiudadesTransporte2016.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase CongresoInternacionalCiudadesTransporte2016

?>
