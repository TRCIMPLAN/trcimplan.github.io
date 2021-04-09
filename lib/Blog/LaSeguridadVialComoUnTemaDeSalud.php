<?php
/**
 * TrcIMPLAN Sitio Web - LaSeguridadVialComoUnTemaDeSalud
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
 * Clase LaSeguridadVialComoUnTemaDeSalud
 */
class LaSeguridadVialComoUnTemaDeSalud extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Seguridad Vial: Un Tema de Salud que nos compete a Todos y Todas.';
        $this->autor                      = 'Arq. Olga Daniela Sánchez Valles';
        $this->fecha                      = '2021-04-12T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-seguridad-vial-como-un-tema-de-salud-abril-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los primeros casos de traumatismos ocasionados por un incidente vial se registraron en 1896, pero fue hasta 2004 cuando la Organización Mundial de la Salud (OMS), declaró que se trataba de una pandemia que estaba cobrando a nivel mundial alrededor de 1,35 millones de vidas y si lo comparamos con los 1,8 millones de personas que fallecieron por COVID 19 en el año 2020, podríamos incluso suponer que los incidentes viales son otro tipo de pandemia.';
        $this->claves                     = 'IMPLAN, Torreon, incidente, vial, seguridad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaSeguridadVialComoUnTemaDeSalud.md';
        // Para el Organizador
        $this->categorias                 = array('Salud', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaSeguridadVialComoUnTemaDeSalud

?>
