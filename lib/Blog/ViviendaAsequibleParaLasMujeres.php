<?php
/**
 * TrcIMPLAN Sitio Web - ViviendaAsequibleParaLasMujeres
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
 * Clase ViviendaAsequibleParaLasMujeres
 */
class ViviendaAsequibleParaLasMujeres extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Vivienda asequible para las mujeres';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2022-04-05T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'vivienda-asequible-para-las-mujeres-abril-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En La Laguna, del 2010 al 2020, el aumento de hogares con jefatura femenina en los últimos años ha pasado de 76,314 a 130,531 hogares, lo cual representa un aumento del 71%.';
        $this->claves                     = 'IMPLAN, Torreon, hogares, mujeres';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ViviendaAsequibleParaLasMujeres.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda','Género');
        $this->fuentes                    = array('ONU-Habitat');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ViviendaAsequibleParaLasMujeres

?>
