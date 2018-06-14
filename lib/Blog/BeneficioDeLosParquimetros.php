<?php
/**
 * TrcIMPLAN Sitio Web - BeneficioDeLosParquimetros
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
 * Clase BeneficioDeLosParquimetros
 */
class BeneficioDeLosParquimetros extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Beneficio de los parquímetros como política de estacionamiento';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2018-06-13T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'beneficio-de-los-parquimetros';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los parquímetros no son la única solución a los problemas de movilidad, pero sí hacen una diferencia si se utilizan adecuadamente. En La Laguna, Lerdo es el municipio que tiene una gestión de estacionamiento más efectiva ya que hay más rotación en los cajones para automóviles.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/BeneficioDeLosParquimetros.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array('Transconsult', 'Pimus');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase BeneficioDeLosParquimetros

?>
