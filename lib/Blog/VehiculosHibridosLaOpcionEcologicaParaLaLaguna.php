<?php
/**
 * TrcIMPLAN Sitio Web - VehiculosHibridosLaOpcionEcologicaParaLaLaguna
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
 * Clase VehiculosHibridosLaOpcionEcologicaParaLaLaguna
 */
class VehiculosHibridosLaOpcionEcologicaParaLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Vehículos híbridos: la opción ecológica para La Laguna';
        $this->autor                      = 'Lic. Alejandra Villarreal Meza';
        $this->fecha                      = '2017-11-27T11:36';
        // El nombre del archivo a crear
        $this->archivo                    = 'vehiculos-hibridos-la-opcion-ecologica-para-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Coahuila ocupa el noveno lugar en la comercialización de vehículos híbridos a nivel nacional. Esta tecnología aún es incipiente en México y la Comarca Lagunera, sin embargo representa una posibilidad para disminuir los efectos de la combustión en el medio ambiente.';
        $this->claves                     = 'IMPLAN, Torreon, Vehículos, Automóviles, Industria, Automotriz, Movilidad, Transporte';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/VehiculosHibridosLaOpcionEcologicaParaLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Movilidad', 'Sustentabilidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase VehiculosHibridosLaOpcionEcologicaParaLaLaguna

?>
