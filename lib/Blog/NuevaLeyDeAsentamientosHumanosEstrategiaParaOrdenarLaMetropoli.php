<?php
/**
 * TrcIMPLAN Sitio Web - Nueva Ley de Asentamientos Humanos: estrategia para ordenar la metrópoli
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
 * Clase NuevaLeyDeAsentamientosHumanosEstrategiaParaOrdenarLaMetropoli
 */
class NuevaLeyDeAsentamientosHumanosEstrategiaParaOrdenarLaMetropoli extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Nueva Ley de Asentamientos Humanos: estrategia para ordenar la metrópoli';
        $this->autor                      = array('Arq. Teresita Benítez Saludado', 'Lic. Adriana Vargas Flores');
        $this->fecha                      = '2016-12-14T15:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'nueva-ley-de-asentamientos-humanos-estrategia-para-ordenar-la-metropoli';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Actualmente el uso de suelo habitacional ocupa la mayor superficie urbana de la Zona Metropolitana de La Laguna. De continuar con una baja densidad poblacional, los escenarios de expansión a futuro resultan preocupantes por la inversión que se necesita y los costos ambientales que esto implica.';
        $this->claves                     = 'IMPLAN, Torreon, Uso de suelo, Asentamientos Humanos, La Laguna, Ley';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/NuevaLeyDeAsentamientosHumanosEstrategiaParaOrdenarLaMetropoli.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vivienda');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase NuevaLeyDeAsentamientosHumanosEstrategiaParaOrdenarLaMetropoli

?>
