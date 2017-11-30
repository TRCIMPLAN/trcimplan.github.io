<?php
/**
 * TrcIMPLAN Sitio Web - LaImportanciaDeImpulsarUnUrbanismoParticipativo
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
 * Clase LaImportanciaDeImpulsarUnUrbanismoParticipativo
 */
class LaImportanciaDeImpulsarUnUrbanismoParticipativo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La importancia de impulsar un urbanismo participativo';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2017-11-29T08:35';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-importancia-de-impulsar-un-urbanismo-participativo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Constitución Política de México en los artículos 25 y 26 hace referencia a las obligaciones y derechos que se otorgan al ciudadano, en su participación en temas de planes y programas de desarrollo.';
        $this->claves                     = 'IMPLAN, Torreon, Urbanismo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaImportanciaDeImpulsarUnUrbanismoParticipativo.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Vivienda');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase LaImportanciaDeImpulsarUnUrbanismoParticipativo

?>
