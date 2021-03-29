<?php
/**
 * TrcIMPLAN Sitio Web - RetosUrbanosEnLaLagunaSeguimientoTRC2040
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
 * Clase RetosUrbanosEnLaLagunaSeguimientoTRC2040
 */
class RetosUrbanosEnLaLagunaSeguimientoTRC2040 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Retos Urbanos en La Laguna y por qué dar seguimiento al TRC 2040';
        $this->autor                      = 'Arq. José Antonio Ramírez Reyes';
        $this->fecha                      = '2021-03-29T00:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'retos-urbanos-en-la-laguna-trc2040-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La extensión exponencial de las ciudades es un fenómeno que se relaciona con varios factores, como el acelerado crecimiento poblacional que tuvimos en México y nuestra región; de iniciar el Siglo XX con 23,190 habitantes sólo en Torreón, hoy somos 1´434,283 habitantes en la Zona Metropolitana de La Laguna, donde 82% es población urbana, aunque solo el 3.59% es suelo urbano.';
        $this->claves                     = 'IMPLAN, Torreon, trc2040, urbanismo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RetosUrbanosEnLaLagunaSeguimientoTRC2040.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase RetosUrbanosEnLaLagunaSeguimientoTRC2040

?>
