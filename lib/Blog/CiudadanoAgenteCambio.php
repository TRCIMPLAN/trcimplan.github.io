<?php
/**
 * TrcIMPLAN Sitio Web - Ciudadano como agente de cambio
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
 * Clase CiudadanoAgenteCambio
 */
class CiudadanoAgenteCambio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudadano como agente de cambio';
        $this->autor                      = 'Arq. Victoria Aranzábal';
        $this->fecha                      = '2015-04-15T15:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudadano-agente-cambio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La participación de la sociedad en proyectos urbanos crea una cultura de co-creación. Destaca Medellín, Colombia donde se aplica en la coordinación, participación y construcción de obra pública.';
        $this->claves                     = 'IMPLAN, Torreon, Ciudadano, Cocreacion, Medellin, Colombia, Proyectos, Urbanos, Espacio publico, Vivienda, Medio ambiente';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CiudadanoAgenteCambio.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Participación Ciudadana');
        $this->fuentes                    = array();
        $this->regiones                   = array('La Laguna');
    } // constructor

} // Clase CiudadanoAgenteCambio

?>
