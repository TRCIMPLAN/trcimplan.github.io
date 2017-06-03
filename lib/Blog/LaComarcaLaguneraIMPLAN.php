<?php
/**
 * TrcIMPLAN Sitio Web - La Comarca Lagunera y el IMPLAN
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
 * Clase LaComarcaLaguneraIMPLAN
 */
class LaComarcaLaguneraIMPLAN extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Comarca Lagunera y el IMPLAN';
        $this->autor                      = 'María Isabel Saldaña';
        $this->fecha                      = '2015-03-07T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-comarca-lagunera-implan';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El jueves 5 de marzo en la Universidad LaSalle en Gómez Palacio, Durango se signa el convenio por José Miguel Campillo Carrete alcalde de Gómez Palacio, Dgo. y Miguel Ángel Riquelme Solís alcalde de Torreón, Coahuila para un plan metropolitano en donde en breve se sumaran Lerdo, Durango y Matamoros, Coahuila.';
        $this->claves                     = 'IMPLAN, Torreon, Plan Estrategico Metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/LaComarcaLaguneraIMPLAN.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Participación Ciudadana');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaComarcaLaguneraIMPLAN

?>
