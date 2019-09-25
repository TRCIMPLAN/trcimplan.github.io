<?php
/**
 * TrcIMPLAN Sitio Web - TorreonDeCiudadanoAConsumidor
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
 * Clase TorreonDeCiudadanoAConsumidor
 */
class TorreonDeCiudadanoAConsumidor extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón, de ciudadano a consumidor';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2019-09-23T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-de-ciudadano-a-consumidor-sep2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '"El comercio en la ciudad ha pasado de estar situado a nivel de calle, como se encontraba comúnmente en el centro, para aglomerarse en grandes edificaciones, espacios “públicos” de propiedad privada”.';
        $this->claves                     = 'IMPLAN, Torreon, comercio, espacios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonDeCiudadanoAConsumidor.md';
        // Para el Organizador
        $this->categorias                 = array('Población', 'Bienestar');
        $this->fuentes                    = array('INEGI', 'AMAI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TorreonDeCiudadanoAConsumidor

?>
