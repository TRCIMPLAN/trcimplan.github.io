<?php
/**
 * TrcIMPLAN Sitio Web - IncrementoDeLaOfertaEducativaEnLaLaguna
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
 * Clase IncrementoDeLaOfertaEducativaEnLaLaguna
 */
class IncrementoDeLaOfertaEducativaEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Incremento de la oferta educativa en La Laguna';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2019-10-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'incremento-de-la-oferta-educativa-en-la-laguna-oct2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Respecto a la oferta de los estudios superiores en La Laguna, existen 62 instituciones que la ofrecen, 5 más con respecto al año antepasado (ciclo escolar 2016-2017). La distribución del total de Instituciones por municipio es la siguiente: En Torreón se ubican 41, en Matamoros 2, en Gómez Palacio 12 y en Lerdo 7.';
        $this->claves                     = 'IMPLAN, Torreon, oferta educativa, universidades';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IncrementoDeLaOfertaEducativaEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('ANUIES');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IncrementoDeLaOfertaEducativaEnLaLaguna

?>
