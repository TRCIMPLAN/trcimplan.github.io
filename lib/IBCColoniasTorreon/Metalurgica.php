<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon Metalurgica
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

namespace IBCColoniasTorreon;

/**
 * Clase Metalurgica
 */
class Metalurgica extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Metalúrgica';
        $this->fecha       = '2017-07-03T12:33:21';
        // El nombre del archivo a crear
        $this->archivo     = 'metalurgica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Metalúrgica en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Metalúrgica';
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 0
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 0
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Industria Manufacturera',
                    'Primer actividad porcentaje' => 100.00
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.521846571703,
            'Centro longitud' => -103.44564632753
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
### Historia

En 1901, la Compañía Metalúrgica de Torreón empezó a trabajar, se encontraba en las afueras de la Villa la cual para 1907 pasaría a ser la ciudad de Torreón. La Compañía Metalúrgica contaba con una colonia, escuela y hospital, para que los trabajadores vivieran cerca de la fábrica.

Para 1983, se comenzó con el proceso de demolición de la Colonia, para ser parte de la Compañía Peñoles.

### Fuentes

* [Hemeroteca El Siglo de Torreón](http://h.elsiglodetorreon.com.mx/)
FINAL;
    } // resena

} // Clase Metalurgica

?>
