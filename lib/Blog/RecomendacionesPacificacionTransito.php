<?php
/**
 * TrcIMPLAN Sitio Web - Recomendaciones para la Pacificación del Tránsito
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
 * Clase RecomendacionesPacificacionTransito
 */
class RecomendacionesPacificacionTransito extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Recomendaciones para la Pacificación del Tránsito';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2015-06-17T16:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'recomendaciones-pacificacion-transito';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Técnicas para bajar la velocidad de los vehículos motorizados, logrando mejorar la seguridad de los peatones, incrementar las ventas y hacer de las calles céntricas espacios sociales y culturales.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RecomendacionesPacificacionTransito.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase RecomendacionesPacificacionTransito

?>
