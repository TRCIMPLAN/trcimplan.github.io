<?php
/**
 * TrcIMPLAN Sitio Web - LaMovilidadSocialEnLaLaguna
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
 * Clase LaMovilidadSocialEnLaLaguna
 */
class LaMovilidadSocialEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La movilidad social en La Laguna';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2019-06-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-movilidad-social-en-la-laguna-junio2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El INEGI estima que existan en Torreón 496 mil personas mayores de 15 años, de las cuales el 2.16% no cuenta con escolaridad alguna, el 46.71% con educación básica (de los cuales 58.64% llegó hasta secundaria), el 22.43% con media superior y el 28.46% con educación superior. Teniendo a nivel municipal un grado promedio de escolaridad es de 10.58 años.';
        $this->claves                     = 'IMPLAN, Torreon, movilidad social, socioeconomicos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaMovilidadSocialEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Poblacion');
        $this->fuentes                    = array('CEEY', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaMovilidadSocialEnLaLaguna

?>
