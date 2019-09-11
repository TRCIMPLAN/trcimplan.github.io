<?php
/**
 * TrcIMPLAN Sitio Web - DiscapacidadEnLaLaguna
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
 * Clase DiscapacidadEnLaLaguna
 */
class DiscapacidadEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La discapacidad como una realidad inevitable en La Laguna';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2019-09-10T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'discapacidad-en-la-laguna-sep2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La discapacidad es un complejo fenómeno que imposibilita o dificulta la interacción de un individuo con su entorno social. Cuando las barreras con las que se enfrenta una persona con discapacidad (PCD) son eliminadas de la sociedad, dejando que ésta desarrolle su vida de la misma manera y facilidad que el resto de la población, se dice que se logra una inclusión plena y efectiva.';
        $this->claves                     = 'IMPLAN, Torreon, discapacidad, inclusion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DiscapacidadEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DiscapacidadEnLaLaguna

?>
