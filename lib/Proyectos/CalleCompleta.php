<?php
/**
 * TrcIMPLAN - Programa Calle Completa
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace Proyectos;

/**
 * Clase CalleCompleta
 */
class CalleCompleta extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Calle Completa';
        $this->autor                      = 'Dirección de Planeación Urbana Sustentable';
        $this->fecha                      = '2015-05-25T12:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'calle-completa';
        $this->imagen                     = 'calle-completa/imagen.jpg';
        $this->imagen_previa              = 'calle-completa/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Es una calle que incluye al peatón y a todos los medios de transporte (ciclistas, motociclistas, autobuses, automovilistas), de todas las edades y con todo tipo de habilidades motoras.';
        $this->claves                     = 'IMPLAN, Torreon, Calle, Completa';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón 2040 > Proyectos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Proyectos/CalleCompleta.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array('Logit', 'Instituto de Políticas para el Transporte y el Desarrollo (ITDP)');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase CalleCompleta

?>
