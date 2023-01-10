<?php
/**
 * TrcIMPLAN Sitio Web - InstitucionalizarLaPlaneacion
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
 * Clase InstitucionalizarLaPlaneacion
 */
class InstitucionalizarLaPlaneacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Institucionalizar la planeación';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2023-01-09T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'institucionalizar-la-planeacion-ene-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El IMPLAN Torreón, representa un esfuerzo por institucionalizar la planeación, bajo la misión: “Procurar la calidad de vida de los habitantes de la ciudad de Torreón, planeando estratégicamente su crecimiento, desarrollo y progreso; con un enfoque sistémico, a través de procesos interactivos y participativos, entre los diferentes sectores de sociedad y gobierno, para alcanzar los más altos niveles de competitividad en la ciudad”.';
        $this->claves                     = 'IMPLAN, Torreon, planeacion, competitividad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InstitucionalizarLaPlaneacion.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('AMIMP');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase InstitucionalizarLaPlaneacion

?>
