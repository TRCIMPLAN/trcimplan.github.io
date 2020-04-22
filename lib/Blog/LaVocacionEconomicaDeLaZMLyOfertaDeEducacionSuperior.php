<?php
/**
 * TrcIMPLAN Sitio Web - LaVocacionEconomicaDeLaZMLyOfertaDeEducacionSuperior
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
 * Clase LaVocacionEconomicaDeLaZMLyOfertaDeEducacionSuperior
 */
class LaVocacionEconomicaDeLaZMLyOfertaDeEducacionSuperior extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Vocación Económica de la ZML y la Oferta de Educación Superior';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2020-04-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-vocacion-economica-de-la-zml-y-oferta-de-educacion-superior';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los estudios ofertados en la Zona Metropolitana de La Laguna (ZML) para el ciclo escolar 2018 – 2019; se agrupan principalmente en el campo de Ingeniería, Manufactura y Construcción; con una representación del 25.85%. Los temas específicos que se abordan en esta división son Manufacturas y Procesos, Arquitectura y Construcción, Ingeniería Mecánica, Electrónica, Eléctrica y profesiones afines.';
        $this->claves                     = 'IMPLAN, Torreon, estudios, educacion superior';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaVocacionEconomicaDeLaZMLyOfertaDeEducacionSuperior.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('Anuies');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaVocacionEconomicaDeLaZMLyOfertaDeEducacionSuperior

?>
