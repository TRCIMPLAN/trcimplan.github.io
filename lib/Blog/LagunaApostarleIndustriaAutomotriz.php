<?php
/**
 * TrcIMPLAN Sitio Web - La Laguna debe apostarle a la Industria Automotriz
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
 * Clase LagunaApostarleIndustriaAutomotriz
 */
class LagunaApostarleIndustriaAutomotriz extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Laguna debe apostarle a la Industria Automotriz';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-07-30T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'laguna-apostarle-industria-automotriz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En industria automotriz hay mayor inversión en la investigación y desarrollo que origina una derrama de capacidades tecnológicas con aplicación en otros sectores como el eléctrico, electrónico y aeroespacial.';
        $this->claves                     = 'IMPLAN, Torreon, Industria, Automotriz, Investigacion, Desarrollo, Manufactura';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html     = 'lib/Blog/LagunaApostarleIndustriaAutomotriz.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Empresas');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LagunaApostarleIndustriaAutomotriz

?>
