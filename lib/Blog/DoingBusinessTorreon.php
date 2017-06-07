<?php
/**
 * TrcIMPLAN Sitio Web - Doing Business en Torreón
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
 * Clase DoingBusinessTorreon
 */
class DoingBusinessTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Doing Business en Torreón';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-05-29T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'doing-business-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este índice sirve para señalar en cual ciudad es más fácil hacer negaocios. En 2007, el municipio de Torreón ocupó el lugar 13 de 32 ciudades evaluadas.';
        $this->claves                     = 'IMPLAN, Torreon, Doing Business';
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html     = 'lib/Blog/DoingBusinessTorreon.html';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Empresas', 'Doing Business');
        $this->fuentes                    = array('Doing Business');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase DoingBusinessTorreon

?>
