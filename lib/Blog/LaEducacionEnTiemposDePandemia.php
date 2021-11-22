<?php
/**
 * TrcIMPLAN Sitio Web - LaEducacionEnTiemposDePandemia
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
 * Clase LaEducacionEnTiemposDePandemia
 */
class LaEducacionEnTiemposDePandemia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La educación en tiempos de pandemia.';
        $this->autor                      = 'Lic. Cristian Vázquez';
        $this->fecha                      = '2021-11-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'educacion-en-tiempos-de-pandemia-nov-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El filósofo y pedagogo John Dewey en su obra Experiencia y educación menciona: «La educación no es preparación para la vida; la educación es la vida en sí misma». Es decir, que el proceso de aprendizaje está siempre presente en el ritmo de la vida.';
        $this->claves                     = 'IMPLAN, Torreon, educacion, pandemia, covid';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaEducacionEnTiemposDePandemia.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaEducacionEnTiemposDePandemia

?>
