<?php
/**
 * TrcIMPLAN Sitio Web - La accesibilidad universal en espacios públicos
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
 * Clase LaAccesibilidadUniversalEnEspaciosPublicos
 */
class LaAccesibilidadUniversalEnEspaciosPublicos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La accesibilidad universal en espacios públicos';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2017-01-10T15:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-accesibilidad-universal-en-espacios-publicos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La recuperación y generación de un espacio público de calidad, busca convertir a la ciudad en un lugar mejor habitable para todos los ciudadanos, incluyendo a la población con discapacidad que en Torreón es de alrededor de un 4.5%.';
        $this->claves                     = 'IMPLAN, Torreon, Espacio Publico, Accesabilidad, Capacidades Diferentes';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaAccesibilidadUniversalEnEspaciosPublicos.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables', 'Población');
        $this->fuentes                    = array('CONAPO', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaAccesibilidadUniversalEnEspaciosPublicos

?>
