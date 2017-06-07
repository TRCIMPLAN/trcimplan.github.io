<?php
/**
 * TrcIMPLAN Sitio Web - Se recupera la Inversión extranjera en La Laguna
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
 * Clase SeRecuperaLaInversionExtranjeraEnLaLaguna
 */
class SeRecuperaLaInversionExtranjeraEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Se recupera la Inversión extranjera en La Laguna';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2016-08-24T14:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'se-recupera-la-inversion-extranjera-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Coahuila ocupa el décimo lugar en México al captar el 3.1% de la inversión extranjera nacional. Torreón y su Zona Metropolitana han registrado más empresas de capital extranjero desde 2014, pero aún falta mucho camino por recorrer ya que en 2015 ciudades como San Luis Potosí y Saltillo presentaron una mejor posición.';
        $this->claves                     = 'IMPLAN, Torreon, Inversion, Extranjera, Crecimiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SeRecuperaLaInversionExtranjeraEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Doing Business', 'Empresas', 'Macroeconomía', 'Mercados');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase SeRecuperaLaInversionExtranjeraEnLaLaguna

?>
