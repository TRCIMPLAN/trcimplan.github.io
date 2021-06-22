<?php
/**
 * TrcIMPLAN Sitio Web - FormulacionDeProgramasYProyectos
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
 * Clase FormulacionDeProgramasYProyectos
 */
class FormulacionDeProgramasYProyectos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La formulación de programas y proyectos, como principio para la planeación y la rendición de cuentas.';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2021-06-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'formulacion-de-programas-y-proyectos-jun-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La cultura de la formulación de programas y proyectos es una práctica de gobierno municipal, estatal y federal, que el funcionariado tiene como obligación inherente a su cargo.';
        $this->claves                     = 'IMPLAN, Torreon, programas, proyectos, gobierno';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/FormulacionDeProgramasYProyectos.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase FormulacionDeProgramasYProyectos

?>
