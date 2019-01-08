<?php
/**
 * TrcIMPLAN Sitio Web - FormasDeDiscriminacionContraLasPersonasIndigenasEnLaRegionLagunera
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
 * Clase FormasDeDiscriminacionContraLasPersonasIndigenasEnLaRegionLagunera
 */
class FormasDeDiscriminacionContraLasPersonasIndigenasEnLaRegionLagunera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Formas de discriminación contra las personas indígenas en la región lagunera';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2019-01-08T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'formas-de-discriminacion-contra-las-personas-indigenas-en-la-region-lagunera-ene2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La discriminación es una forma de violencia que afecta la vida cotidiana y el desarrollo de las personas indígenas en Coahuila y en la región. Se manifiesta principalmente en burlas a su idioma y vestido, así como en la negación de la educación, vivienda y de oportunidades laborales. De esta manera, el 30% ha recibido discriminación por su forma de hablar y al 41% se le negó la oportunidad de seguir estudiando.';
        $this->claves                     = 'IMPLAN, Torreon, discriminacion, indigenas, indigenas torreon, violencia indigenas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/FormasDeDiscriminacionContraLasPersonasIndigenasEnLaRegionLagunera.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables');
        $this->fuentes                    = array('INEGI', 'ENADIS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase FormasDeDiscriminacionContraLasPersonasIndigenasEnLaRegionLagunera

?>
