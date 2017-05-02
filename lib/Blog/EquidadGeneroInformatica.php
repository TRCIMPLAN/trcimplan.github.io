<?php
/**
 * TrcIMPLAN Sitio Web - Equidad de Género en Informática
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 * Clase EquidadGeneroInformatica
 */
class EquidadGeneroInformatica extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Equidad de Género en Informática';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2014-09-19T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'equidad-genero-informatica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Aunque vivimos el mejor momento de las Ciencias Computacionales, el género femenino tiene muy poca participación en el sector.';
        $this->claves                     = 'IMPLAN, Torreon, Informática, Equidad, Género';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/EquidadGeneroInformatica.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Género', 'Educación', 'Empleo');
        $this->fuentes                    = array('INEGI', 'Asociación Mexicana de Internet (AMIPCI)');
        $this->regiones                   = array();
    } // constructor

} // Clase EquidadGeneroInformatica

?>
