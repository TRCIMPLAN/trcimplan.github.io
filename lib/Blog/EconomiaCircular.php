<?php
/**
 * TrcIMPLAN Sitio Web - EconomiaCircular
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
 * Clase EconomiaCircular
 */
class EconomiaCircular extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Economía circular: alternativa sustentable para el sector de la construcción';
        $this->autor                      = 'Ing. José Juan Astorga Cabrales';
        $this->fecha                      = '2022-08-01T13:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'economia-circular-ago-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La economía circular es útil gracias a que selecciona, gestiona y minimiza la cantidad de recursos naturales: los no renovables y las materias primas críticas. Favorece el uso de materiales reciclados siempre que sea posible y gracias a estas alternativas, minimiza los impactos ambientales, apoyando la regeneración natural.';
        $this->claves                     = 'IMPLAN, Torreon, economia, circular, construccion, reciclaje';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EconomiaCircular.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas');
        $this->fuentes                    = array('CMIC');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EconomiaCircular

?>
