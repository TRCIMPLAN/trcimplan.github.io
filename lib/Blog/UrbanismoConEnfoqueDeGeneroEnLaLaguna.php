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
 * Clase UrbanismoConEnfoqueDeGeneroEnLaLaguna
 */
class UrbanismoConEnfoqueDeGeneroEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Urbanismo con enfoque de género en La Laguna';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2019-05-23T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'urbanismo-con-enfoque-de-genero-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“El Urbanismo con perspectiva de género trata de paliar los desequilibrios a la hora de definir estrategias de intervención en las ciudades, buscando un reparto más equitativo de las inversiones, que garanticen un acceso y disfrute del espacio público en igualdad de condiciones para toda la ciudadanía.” (Hiria Kolektiboa, 2010).';
        $this->claves                     = 'IMPLAN, Torreon, urbanismo, genero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UrbanismoConEnfoqueDeGeneroEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda', 'Género', 'Infraestructura');
        $this->fuentes                    = array('INEGI', 'IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase UrbanismoConEnfoqueDeGeneroEnLaLaguna

?>
