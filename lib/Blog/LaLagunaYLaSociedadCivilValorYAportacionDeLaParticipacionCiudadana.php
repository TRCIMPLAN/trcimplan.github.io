<?php
/**
 * TrcIMPLAN Sitio Web - La Laguna y la Sociedad Civil. Valor y aportación de la participación ciudadana.
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano guillermo@movimientolibre.com
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
 * @package SitioWeb
 */

namespace Blog;

/**
 * Clase LaLagunaYLaSociedadCivilValorYAportacionDeLaParticipacionCiudadana
 */
class LaLagunaYLaSociedadCivilValorYAportacionDeLaParticipacionCiudadana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'La Laguna y la Sociedad Civil. Valor y aportación de la participación ciudadana.';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2016-11-30T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-laguna-y-la-sociedad-civil-valor-y-aportacion-de-la-participacion-ciudadana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Zona Metropolitana de La Laguna tiene casi el doble de organizaciones de la sociedad civil por habitantes que el país. La asistencia social y el fomento educativo son sus principales actividades. Más de 16 mil personas trabajan en ellas aportando con sus servicios 1,300 millones de pesos en valor agregado a nuestra ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, OSC, Sociedad Civil, Organizaciones';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaLagunaYLaSociedadCivilValorYAportacionDeLaParticipacionCiudadana.md';
        // Banderas que pueden tener un valor por defecto en \Configuracion\PublicacionConfig
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Educación', 'Participación Ciudadana');
        $this->fuentes                    = array('INEGI', 'Registro Federal de Organizaciones de la Sociedad Civil');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaLagunaYLaSociedadCivilValorYAportacionDeLaParticipacionCiudadana


?>
