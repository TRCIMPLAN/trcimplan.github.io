<?php
/**
 * TrcIMPLAN Sitio Web - Diagnóstico del problema de drenaje pluvial en Torreón
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
 * Clase DiagnosticoDelProblemaDeDrenajePluvialEnTorreon
 */
class DiagnosticoDelProblemaDeDrenajePluvialEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Diagnóstico del problema de drenaje pluvial en Torreón';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2015-11-30T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'diagnostico-del-problema-de-drenaje-pluvial-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se cuenta con 17 sistemas de captación y 10 colectores pluviales que necesitan reparación y mantenimiento, para comenzar a resolver parcialmente el problema de los encharcamientos de lluvia.';
        $this->claves                     = 'IMPLAN, Torreon, Diagnostico, Drenaje Pluvial';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/DiagnosticoDelProblemaDeDrenajePluvialEnTorreon.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('IMPLAN', 'SIMAS');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase DiagnosticoDelProblemaDeDrenajePluvialEnTorreon

?>
