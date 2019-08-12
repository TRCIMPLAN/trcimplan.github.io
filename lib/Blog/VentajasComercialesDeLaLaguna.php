<?php
/**
 * TrcIMPLAN Sitio Web - VentajasComercialesDeLaLaguna
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
 * Clase VentajasComercialesDeLaLaguna
 */
class VentajasComercialesDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ventaja comercial de La Laguna';
        $this->autor                      = 'Lic. Daniel Alejandro López Murga';
        $this->fecha                      = '2019-08-07T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'ventajas-comerciales-de-la-laguna-agosto2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De los ingresos por exportación de la Zona Metropolitana de La Laguna, el oro y la plata son los más importantes al representar el 34% y 16.07% del total respectivamente.';
        $this->claves                     = 'IMPLAN, Torreon, exportacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/VentajasComercialesDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Macroeconomia');
        $this->fuentes                    = array('INEGI', 'SAT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase VentajasComercialesDeLaLaguna

?>
