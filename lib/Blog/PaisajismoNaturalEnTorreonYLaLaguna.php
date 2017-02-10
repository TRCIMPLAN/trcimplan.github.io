<?php
/**
 * TrcIMPLAN Sitio Web - PaisajismoNaturalEnTorreonYLaLaguna
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * Clase PaisajismoNaturalEnTorreonYLaLaguna
 */
class PaisajismoNaturalEnTorreonYLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Paisajismo natural en Torreón y La Laguna';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2017-02-10T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'paisajismo-natural-en-torreon-y-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Contar con una imagen urbana paisajista, permite al habitante de la ciudad tener un elemento de identidad reconociendo su relevancia natural y cultural. En Torreón es necesario continuar con la rehabilitación de áreas verdes.';
        $this->claves                     = 'IMPLAN, Torreon, Imagen, Urbana, Paisaje, Natural';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PaisajismoNaturalEnTorreonYLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales');
        $this->fuentes                    = array('IMPLAN', 'INEGI', 'Organización Mundial de la Salud (OMS)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros');
    } // constructor

} // Clase PaisajismoNaturalEnTorreonYLaLaguna

?>
