<?php
/**
 * TrcIMPLAN Sitio Web - Apertura de Empresas 2014
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 * Clase AperturaEmpresas2014
 */
class AperturaEmpresas2014 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Apertura de Empresas 2014';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-09-24T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'apertura-empresas-2014';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año 2014 en el mes de julio.';
        $this->claves                     = 'IMPLAN, Torreon, Apertura de empresas';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html     = 'lib/Blog/AperturaEmpresas2014.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Doing Business', 'Competitividad');
        $this->fuentes                    = array('Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase AperturaEmpresas2014

?>
