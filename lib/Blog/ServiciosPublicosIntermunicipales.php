<?php
/**
 * TrcIMPLAN Sitio Web - ServiciosPublicosIntermunicipales
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
 * Clase ServiciosPublicosIntermunicipales
 */
class ServiciosPublicosIntermunicipales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Servicios Públicos Intermunicipales';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2022-03-28T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'servicios-publicos-intermunicipales-mar-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'SIMAS Intermunicipal ha mantenido su crecimiento en atención a usuarios. Aunque siguen predominando los usuarios rurales, en Torreón la situación se modifica, con una mayoría de usuarios urbanos.';
        $this->claves                     = 'IMPLAN, Torreon, intermunicipal, rurales, simas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ServiciosPublicosIntermunicipales.md';
        // Para el Organizador
        $this->categorias                 = array('Servicios Públicos');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ServiciosPublicosIntermunicipales

?>
