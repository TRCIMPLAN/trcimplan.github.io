<?php
/**
 * TrcIMPLAN Sitio Web - LaNuevaMasculinidadEnLaLaguna
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
 * Clase LaNuevaMasculinidadEnLaLaguna
 */
class LaNuevaMasculinidadEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La nueva masculinidad en La Laguna.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-06-24T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-nueva-masculinidad-en-la-laguna-junio-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Respecto al concepto de Masculinidad se puede hablar de varios tipos, existe la masculinidad hegemónica (Connell, 1995) que se constituye en aquel modelo que se impone y reproduce, y por tanto naturaliza, como práctica e identidad de género obligatoria para todos los hombres. ';
        $this->claves                     = 'IMPLAN, Torreon, masculinidad, hombres';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaNuevaMasculinidadEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Género','Población');
        $this->fuentes                    = array('ENIGH');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaNuevaMasculinidadEnLaLaguna

?>
