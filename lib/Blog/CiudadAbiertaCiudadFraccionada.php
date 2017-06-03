<?php
/**
 * TrcIMPLAN Sitio Web - Ciudad abierta y ciudad fraccionada
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
 * Clase CiudadAbiertaCiudadFraccionada
 */
class CiudadAbiertaCiudadFraccionada extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudad abierta y ciudad fraccionada';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2015-02-24T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudad-abierta-ciudad-fraccionada';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La fragmentación social y urbana provocada por desarrollos habitacionales “seguros” tiene efectos que agravan la percepción de la inseguridad en la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, Ciudad, Fraccionamientos, Cerrados';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CiudadAbiertaCiudadFraccionada.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio');
    } // constructor

} // Clase CiudadAbiertaCiudadFraccionada

?>
