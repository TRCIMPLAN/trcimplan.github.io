<?php
/**
 * TrcIMPLAN Sitio Web - ImplementacionDeLasAsociacionesPublicoPrivadasEnTorreon
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
 * Clase ImplementacionDeLasAsociacionesPublicoPrivadasEnTorreon
 */
class ImplementacionDeLasAsociacionesPublicoPrivadasEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Implementación de las Asociaciones Público Privadas en Torreón';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2019-05-07T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'implementacion-de-las-asociaciones-publico-privadas-mayo2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con el Banco Mundial “…una asociación público privada (APP) se refiere a un acuerdo entre el sector público y el sector privado, en el que parte de los servicios o labores que son responsabilidad del sector público, es suministrada por el sector privado bajo un claro acuerdo de objetivos compartidos…”.';
        $this->claves                     = 'IMPLAN, Torreon, asociaciones';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImplementacionDeLasAsociacionesPublicoPrivadasEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Población','Servicios Públicos');
        $this->fuentes                    = array('Tesorería Municipal de Torreón', 'Dirección de Alumbrado Público');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ImplementacionDeLasAsociacionesPublicoPrivadasEnTorreon

?>
