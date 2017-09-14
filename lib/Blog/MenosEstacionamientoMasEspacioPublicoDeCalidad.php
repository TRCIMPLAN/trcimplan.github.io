<?php
/**
 * TrcIMPLAN Sitio Web - MenosEstacionamientoMasEspacioPublicoDeCalidad
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
 * Clase MenosEstacionamientoMasEspacioPublicoDeCalidad
 */
class MenosEstacionamientoMasEspacioPublicoDeCalidad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Menos estacionamiento, más espacio público de calidad';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2017-09-14T12:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'menos-estacionamiento-mas-espacio-publico-de-calidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las nuevas tendencias urbanísticas no buscan prohibir la construcción de cajones de estacionamiento sino de revertir su tendencia de crecimiento exponencial.';
        $this->claves                     = 'IMPLAN, Torreon, Estacionamiento, Espacio Publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MenosEstacionamientoMasEspacioPublicoDeCalidad.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Vialidad');
        $this->fuentes                    = array('Ayuntamiento de Torreón', 'Instituto de Políticas para el Transporte y el Desarrollo (ITDP)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase MenosEstacionamientoMasEspacioPublicoDeCalidad

?>
