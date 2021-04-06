<?php
/**
 * TrcIMPLAN Sitio Web - LaLuchaContraLaDiscriminacionRacialEnLaLaguna
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
 * Clase LaLuchaContraLaDiscriminacionRacialEnLaLaguna
 */
class LaLuchaContraLaDiscriminacionRacialEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Lucha contra la Discriminación Racial en La Laguna';
        $this->autor                      = 'Lic. Nina Graciela Hernández Jayme';
        $this->fecha                      = '2021-04-06T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-lucha-contra-la-discriminacion-racial-en-la-laguna-abril-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 21 de marzo se conmemora el Día Internacional de la Eliminación de la Discriminación Racial. Así lo estableció las Naciones Unidas con el fin de concientizar y fomentar una cultura de tolerancia, igualdad y antidiscriminación racial. La discriminación no solo es una forma de violencia que afecta la vida cotidiana de diversos grupos minoritarios, sino que también limita la capacidad de participar en la vida pública y obstaculiza la individualidad y el desarrollo social.';
        $this->claves                     = 'IMPLAN, Torreon, discriminacion, racial, tolerancia, cultura';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaLuchaContraLaDiscriminacionRacialEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables', 'Cultura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaLuchaContraLaDiscriminacionRacialEnLaLaguna

?>
