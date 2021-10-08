<?php
/**
 * TrcIMPLAN Sitio Web - InfraestructuraVerdeTorreon
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
 * Clase InfraestructuraVerdeTorreon
 */
class InfraestructuraVerdeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Infraestructura verde para Torreón: Una opción para combatir los efectos del cambio climático';
        $this->autor                      = 'Arq. Olga Daniela Sánchez Valles';
        $this->fecha                      = '2021-10-08T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'infraestructura-verde-torreon-oct-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Aunque el concepto de infraestructura verde es relativamente nuevo, la idea inicial fue concebida durante la segunda mitad del siglo XIX, cuando se inició la construcción de parques urbanos en diferentes ciudades de Estados Unidos con la intención de mejorar la calidad de vida de las poblaciones urbanas.';
        $this->claves                     = 'IMPLAN, Torreon, infraestructura, verde, parques, vida';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InfraestructuraVerdeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase InfraestructuraVerdeTorreon

?>
