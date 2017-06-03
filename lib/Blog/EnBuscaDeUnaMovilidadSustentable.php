<?php
/**
 * TrcIMPLAN Sitio Web - En busca de una Movilidad Sustentable
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
 * Clase EnBuscaDeUnaMovilidadSustentable
 */
class EnBuscaDeUnaMovilidadSustentable extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'En busca de una Movilidad Sustentable';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2016-06-07T16:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'en-busca-de-una-movilidad-sustentable';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Debido al acelerado crecimiento de la mancha urbana en la Comarca, el Desarrollo Orientado al Transporte (DOT) puede ayudar a crear una ciudad compacta y de alta densidad, donde las personas puedan elegir un modo de transporte diferente al automóvil y puedan contar con infraestructura peatonal y ciclista de calidad.';
        $this->claves                     = 'IMPLAN, Torreon, Ciudad compacta, Transporte, Peatonal, Ciclista';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EnBuscaDeUnaMovilidadSustentable.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EnBuscaDeUnaMovilidadSustentable

?>
