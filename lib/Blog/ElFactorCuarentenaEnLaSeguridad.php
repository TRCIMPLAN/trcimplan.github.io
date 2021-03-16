<?php
/**
 * TrcIMPLAN Sitio Web - ElFactorCuarentenaEnLaSeguridad
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
 * Clase ElFactorCuarentenaEnLaSeguridad
 */
class ElFactorCuarentenaEnLaSeguridad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Factor Cuarentena en la Seguridad';
        $this->autor                      = 'Lic. Jorge Fernando del Moral Fraire';
        $this->fecha                      = '2021-03-16T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-factor-cuarentena-en-la-seguridad-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“La tendencia a la baja se mantiene para este comienzo de 2021, siendo enero el mes del que se tiene información, se observa una diferencia de -12.59% y -9.70% para Torreón y la ZML respectivamente usando enero 2020 como referencia.”';
        $this->claves                     = 'IMPLAN, Torreon, seguridad, cuarentena';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElFactorCuarentenaEnLaSeguridad.md';
        // Para el Organizador
        $this->categorias                 = array('Seguridad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElFactorCuarentenaEnLaSeguridad

?>
