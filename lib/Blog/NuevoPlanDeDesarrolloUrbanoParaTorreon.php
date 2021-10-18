<?php
/**
 * TrcIMPLAN Sitio Web - NuevoPlanDeDesarrolloUrbanoParaTorreon
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
 * Clase NuevoPlanDeDesarrolloUrbanoParaTorreon
 */
class NuevoPlanDeDesarrolloUrbanoParaTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reconstrucción del Plan Director de Desarrollo Urbano para Torreón.';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2021-10-18T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'nuevo-plan-director-de-desarrollo-urbano-torreon-oct-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón al año 2020, se registró una población de 720,848 habitantes (INEGI), con una tasa de crecimiento para el periodo 2010- 2020 de 1.20%, la cual se proyecta que disminuya para el periodo 2025-2030 a 0.96%.';
        $this->claves                     = 'IMPLAN, Torreon, plan, director, urbano, desarrollo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/NuevoPlanDeDesarrolloUrbanoParaTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda', 'Gobierno');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase NuevoPlanDeDesarrolloUrbanoParaTorreon

?>
