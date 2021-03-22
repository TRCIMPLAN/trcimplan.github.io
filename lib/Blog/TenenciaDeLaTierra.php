<?php
/**
 * TrcIMPLAN Sitio Web - TenenciaDeLaTierra
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
 * Clase TenenciaDeLaTierra
 */
class TenenciaDeLaTierra extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Tenencia de la Tierra en Torreón';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2021-03-22T00:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'tenencia-de-la-tierra-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el 2018 el municipio de Torreón y la CERTTURC otorgaron a través de la Regularización de Asentamientos Humanos Urbanos (RAHU), un total de 148 escrituras en varias colonias: Ampliación Zaragoza Sur, Carmen Romano, Las Carolinas, La Unión, Las Julietas, José Luz Torres, etcétera.';
        $this->claves                     = 'IMPLAN, Torreon, tenencia, escrituras';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TenenciaDeLaTierra.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TenenciaDeLaTierra

?>
