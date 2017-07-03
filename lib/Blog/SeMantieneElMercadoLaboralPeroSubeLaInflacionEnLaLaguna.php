<?php
/**
 * TrcIMPLAN Sitio Web - SeMantieneElMercadoLaboralPeroSubeLaInflacionEnLaLaguna
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
 * Clase SeMantieneElMercadoLaboralPeroSubeLaInflacionEnLaLaguna
 */
class SeMantieneElMercadoLaboralPeroSubeLaInflacionEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Se mantiene el mercado laboral, pero sube la inflación en La Laguna';
        $this->autor                      = 'Autor';
        $this->fecha                      = '2017-07-03T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'se-mantiene-el-mercado-laboral-pero-sube-la-inflacion-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el primer trimestre de 2017 los precios de los bienes y servicios de La Laguna se vieron afectados por el entorno económico nacional, sin embargo la formalización de empleos ha sido una fortaleza de la economía de La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SeMantieneElMercadoLaboralPeroSubeLaInflacionEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Empresas', 'Mercados');
        $this->fuentes                    = array('INEGI', 'IMSS Subdelegación Torreón');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SeMantieneElMercadoLaboralPeroSubeLaInflacionEnLaLaguna

?>
