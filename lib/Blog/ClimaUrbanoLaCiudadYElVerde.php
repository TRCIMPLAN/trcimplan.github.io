<?php
/**
 * TrcIMPLAN Sitio Web - ClimaUrbanoLaCiudadYElVerde
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
 * Clase ClimaUrbanoLaCiudadYElVerde
 */
class ClimaUrbanoLaCiudadYElVerde extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Clima Urbano: La Ciudad y el Verde';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2018-07-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'clima-urbano-la-ciudad-y-el-verde';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se han donado y plantado un total de 3,887 árboles en lo que va del año entre ellos mezquites, huizaches y palo verde, árboles regionales y adaptados.';
        $this->claves                     = 'IMPLAN, Torreon, Ciudad, Clima, temperatura';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ClimaUrbanoLaCiudadYElVerde.md';
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales', 'Medio Ambiente');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ClimaUrbanoLaCiudadYElVerde

?>
