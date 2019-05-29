<?php
/**
 * TrcIMPLAN Sitio Web - UrbanismoConEnfoqueDeGeneroEnLaLaguna
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
 * Clase MovilidadConPerspectivaDeGeneroEnLaLaguna
 */
class MovilidadConPerspectivaDeGeneroEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Movilidad con perspectiva de género en La Laguna';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2019-05-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'movilidad-con-perspectiva-de-genero-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La forma en cómo nos movemos mujeres y hombres no es la misma. Los roles de género impuestos históricamente a las personas a partir de su sexo y que hasta la fecha siguen predominando, generan que los hombres se muevan de manera pendular en traslados directos de ida y vuelta, que por lo general son del hogar al trabajo y viceversa.';
        $this->claves                     = 'IMPLAN, Torreon, urbanismo, genero, movilidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MovilidadConPerspectivaDeGeneroEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Género', 'Infraestructura');
        $this->fuentes                    = array('INEGI', 'IMPLAN', 'ONU');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MovilidadConPerspectivaDeGeneroEnLaLaguna

?>
