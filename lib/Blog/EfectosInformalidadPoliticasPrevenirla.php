<?php
/**
 * TrcIMPLAN Sitio Web - Efectos de la informalidad y políticas para prevenirla
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
 * Clase EfectosInformalidadPoliticasPrevenirla
 */
class EfectosInformalidadPoliticasPrevenirla extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Efectos de la informalidad y políticas para prevenirla';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2015-03-10T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'efectos-informalidad-politicas-prevenirla';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La informalidad tiene repercusiones directas sobre la competitividad y el crecimiento económico. Es cierto que ocupa a población desempleada en el sector formal y sus insumos e inversión apoyan a la economía, sin embargo es mayor el daño generado en el crecimiento a largo plazo.';
        $this->claves                     = 'IMPLAN, Torreon, Informalidad, Crecimiento Económico, Desempleo';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EfectosInformalidadPoliticasPrevenirla.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('Organización para la Cooperación y Desarrollo Económicos (OCDE)');
        $this->regiones                   = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase EfectosInformalidadPoliticasPrevenirla

?>
