<?php
/**
 * TrcIMPLAN Sitio Web - Matriz energética lagunera: necesaria visión de futuro
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
 * Clase MatrizEnergeticaLaguneraNecesariaVisionDeFuturo
 */
class MatrizEnergeticaLaguneraNecesariaVisionDeFuturo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Matriz energética lagunera: necesaria visión de futuro';
        $this->autor                      = array('Lic. Eduardo Holguín Zehfuss', 'Lic. Adriana Vargas Flores');
        $this->fecha                      = '2016-09-08T10:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'matriz-energetica-lagunera-necesaria-vision-de-futuro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Es necesario reconocer el gran potencial de La Laguna en materia de energías limpias o energías renovables, dado que contamos con importantes ventajas competitivas y comparativas en la rama de energía solar, energía de la biomasa y energía eólica.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MatrizEnergeticaLaguneraNecesariaVisionDeFuturo.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Innovación', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MatrizEnergeticaLaguneraNecesariaVisionDeFuturo

?>
