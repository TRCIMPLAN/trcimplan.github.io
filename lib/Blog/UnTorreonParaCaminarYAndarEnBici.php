<?php
/**
 * TrcIMPLAN Sitio Web - UnTorreonParaCaminarYAndarEnBici
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
 * Clase UnTorreonParaCaminarYAndarEnBici
 */
class UnTorreonParaCaminarYAndarEnBici extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Un Torreón para caminar y andar en bici es posible.';
        $this->autor                      = 'Mtro. Salvador Herrera Montes';
        $this->fecha                      = '2022-10-10T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'un-torreon-para-caminar-y-andar-en-bici-oct-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los Planes de Movilidad Activa son una reciente iniciativa de planeación urbana que considera los factores que limitan e impulsan el uso de medios no motorizados y su relación con la tipología de vías.';
        $this->claves                     = 'IMPLAN, Torreon, movilidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UnTorreonParaCaminarYAndarEnBici.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase UnTorreonParaCaminarYAndarEnBici

?>
