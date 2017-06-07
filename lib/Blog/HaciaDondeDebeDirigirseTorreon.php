<?php
/**
 * TrcIMPLAN Sitio Web - Hacia dónde debe dirigirse Torreón
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
 * Clase HaciaDondeDebeDirigirseTorreon
 */
class HaciaDondeDebeDirigirseTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Hacia dónde debe dirigirse Torreón';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-04-16T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'hacia-donde-debe-dirigirse-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '¿En realidad generan más valor las actividades tecnológicas y de servicios?';
        $this->claves                     = 'IMPLAN, Torreon, Actividades, Tecnológicas, Servicios';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/HaciaDondeDebeDirigirseTorreon.html';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Empresas');
        $this->fuentes                    = array('INEGI', 'Organización para la Cooperación y Desarrollo Económicos (OCDE)');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase HaciaDondeDebeDirigirseTorreon

?>
