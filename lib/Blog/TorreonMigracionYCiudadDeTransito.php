<?php
/**
 * TrcIMPLAN Sitio Web - TorreonMigracionYCiudadDeTransito
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
 * Clase TorreonMigracionYCiudadDeTransito
 */
class TorreonMigracionYCiudadDeTransito extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón: migración y ciudad de tránsito.';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2020-08-11T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-migracion-y-ciudad-de-transito-agosto-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La migración es un fenómeno que distingue al flujo de personas que cambian su residencia fuera de los límites políticos administrativos de un territorio; iniciando de un punto de origen y finalizando con un punto de destino. Un territorio puede ser un lugar de atracción (destino) por diversas características socioeconómicas que faciliten el desarrollo del individuo, y un lugar de expulsión (origen) el cual carece de ellas.';
        $this->claves                     = 'IMPLAN, Torreon, migracion, ciudad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonMigracionYCiudadDeTransito.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('CONAPO');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TorreonMigracionYCiudadDeTransito

?>
