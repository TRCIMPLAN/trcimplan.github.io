<?php
/**
 * TrcIMPLAN Sitio Web - Productividad en la Zona Metropolitana de La Laguna
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
 * Clase ProductividadEnZML
 */
class ProductividadEnZML extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Productividad en la Zona Metropolitana de La Laguna';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-07-01T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'productividad-zml';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de la productividad laboral, industria manufacturera y eficiencia del trabajo en la Zona Metropolitana de la Laguna.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/ProductividadEnZML.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Empleo', 'Mercados');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ProductividadEnZML

?>
