<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200730MiEspacio
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
 * Clase ComunicadoPrensa20200730MiEspacio
 */
class ComunicadoPrensa20200730MiEspacio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Mi Espacio:  Recopilación de proyectos y recomendaciones para enfrentar al COVID-19';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2020-07-30T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-07-20-mi-espacio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En diciembre del 2019 se detectó un nuevo virus denominado COVID-19, el cual se extendió por todo el mundo y la Organización Mundial de la Salud (OMS) declaró una pandemia global en rueda de prensa el 11 de marzo del 2020.
El 30 de marzo del 2020, se declaró emergencia sanitaria a nivel nacional en México, suspendiendo las actividades no esenciales de los sectores públicos y privados.';
        $this->claves                     = 'IMPLAN, Torreon, covid, sanitaria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200730MiEspacio.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200730MiEspacio

?>
