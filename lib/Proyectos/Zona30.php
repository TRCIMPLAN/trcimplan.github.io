<?php
/**
 * TrcIMPLAN Sitio Web- Zona 30
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase Zona30
 */
class Zona30 extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Zona 30';
        $this->autor                      = 'Dirección de Proyectos Estratégicos';
        $this->fecha                      = '2015-08-12T15:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'zona-30';
        $this->imagen                     = 'zona-30/imagen.jpg';
        $this->imagen_previa              = 'zona-30/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Proyecto de regeneración del espacio público mediante una estrategia de pacificación de tránsito y los principios de visión cero, accesibilidad universal.';
        $this->claves                     = 'IMPLAN, Torreon, Zona, 30, Centro, Espacio, Publico, Regeneracion, Vision Cero, Accesabilidad';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón > Proyectos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Proyectos/Zona30.md';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vialidad');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase Zona30

?>
