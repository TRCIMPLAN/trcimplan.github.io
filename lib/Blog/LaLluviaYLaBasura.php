<?php
/**
 * TrcIMPLAN Sitio Web - LaLluviaYLaBasura
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
 * Clase LaLluviaYLaBasura
 */
class LaLluviaYLaBasura extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Lluvia y la Basura';
        $this->autor                      = 'Q.F.B. Susana Estens de la Garza';
        $this->fecha                      = '2017-10-05T10:36';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-lluvia-y-la-basura';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los drenajes tapados no ocurren por casualidad. La basura no se produce por generación espontánea. Es el producto de lo que consumimos y de nuestras decisiones.';
        $this->claves                     = 'IMPLAN, Torreon, Lluvia, Basura, Drenaje, Tapado';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaLluviaYLaBasura.md';
        // Para el Organizador
        $this->categorias                 = array('Servicios Públicos', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase LaLluviaYLaBasura

?>
