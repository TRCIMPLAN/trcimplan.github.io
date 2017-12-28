<?php
/**
 * TrcIMPLAN Sitio Web - BalanceEconomico2017
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
 * Clase BalanceEconomico2017
 */
class BalanceEconomico2017 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Balance Económico de La Laguna en el 2017';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2017-12-28T12:35';
        // El nombre del archivo a crear
        $this->archivo                    = 'balance-economico-2017';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En general la economía de La Laguna presenta informalidad a la baja, explicada en parte por una tendencia hacia el pleno empleo con tasas cada vez menores al 5%. El tema pendiente es la mejora de la calidad de los empleos, el salario promedio aún es menor que en otras regiones del país.';
        $this->claves                     = 'IMPLAN, Torreon, Balance, Economia, 2017';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/BalanceEconomico2017.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Mercados');
        $this->fuentes                    = array('IMSS', 'INEGI', 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase BalanceEconomico2017

?>
