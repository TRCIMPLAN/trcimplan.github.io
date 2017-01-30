<?php
/**
 * TrcIMPLAN Sitio Web - LasMujeresYSuAccesoAUnaVidaSinViolencia
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
 * Clase LasMujeresYSuAccesoAUnaVidaSinViolencia
 */
class LasMujeresYSuAccesoAUnaVidaSinViolencia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Las mujeres y su acceso a una vida sin violencia';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2017-01-30T11:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'las-mujeres-y-su-acceso-a-una-vida-sin-violencia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón, así como a nivel nacional, se calcula que 63% de las mujeres mayores de 15 años es susceptible a vivir un episodio de violencia. En México las mujeres que se encuentran más expuestas a violencia de pareja son las jóvenes  de entre 20 y 39 años de edad.';
        $this->claves                     = 'IMPLAN, Torreon, Violencia, Genero, Femenino, Justicia';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LasMujeresYSuAccesoAUnaVidaSinViolencia.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Género', 'Seguridad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LasMujeresYSuAccesoAUnaVidaSinViolencia

?>
