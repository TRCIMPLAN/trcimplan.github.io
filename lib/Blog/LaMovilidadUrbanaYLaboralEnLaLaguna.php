<?php
/**
 * TrcIMPLAN Sitio Web - La movilidad urbana y laboral en La Laguna
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
 * Clase LaMovilidadUrbanaYLaboralEnLaLaguna
 */
class LaMovilidadUrbanaYLaboralEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La movilidad urbana y laboral en La Laguna';
        $this->autor                      = array('Lic. Luis A. Gutiérrez Arizpe', 'Arq. Cecilio Pedro Secunza Schott');
        $this->fecha                      = '2015-10-14T13:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-movilidad-urbana-y-laboral-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La expansión de la mancha urbana en la región ha ocasionado que se privilegie el uso de automóvil particular, provocando efectos negativos sobre la salud, ocupación creciente del espacio y costos extremos.';
        $this->claves                     = 'IMPLAN, Torreon, Transporte, Movilidad, Laboral, Municipios, La Laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/LaMovilidadUrbanaYLaboralEnLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array('Logit');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaMovilidadUrbanaYLaboralEnLaLaguna

?>
