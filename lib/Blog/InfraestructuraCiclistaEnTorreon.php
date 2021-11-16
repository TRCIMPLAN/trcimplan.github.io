<?php
/**
 * TrcIMPLAN Sitio Web - InfraestructuraCiclistaEnTorreon
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
 * Clase InfraestructuraCiclistaEnTorreon
 */
class InfraestructuraCiclistaEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Infraestructura Ciclista en Torreón, circuitos ciclistas.';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2021-11-16T14:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'infraestructura-ciclista-en-torreon-nov-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La movilidad activa se ha convertido en un elemento fundamental en la movilidad urbana de la ciudad, la expansión de la mancha urbana ha generado que los desplazamientos sean más largos y por tanto el uso de los modos de transporte motorizados ha generado diversos problemas y conflictos en las vialidades.';
        $this->claves                     = 'IMPLAN, Torreon, movilidad, urbana, transporte';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InfraestructuraCiclistaEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase InfraestructuraCiclistaEnTorreon

?>
