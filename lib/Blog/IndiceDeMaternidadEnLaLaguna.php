<?php
/**
 * TrcIMPLAN Sitio Web - IndiceDeMaternidadEnLaLaguna
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
 * Clase IndiceDeMaternidadEnLaLaguna
 */
class IndiceDeMaternidadEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Índice de Maternidad en La Laguna';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2018-10-31T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'indice-de-maternidad-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El municipio de Torreón presenta una ligera diferencia a la tendencia estatal, en ella no solo se refleja un aumento en madres menores de 20 años, sino que presenta un aumento de nacimientos de madres mayores de 28 años. Lo cual lleva a concluir que las edades más frecuentes son tempranas o tardías.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IndiceDeMaternidadEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Salud', 'Población');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IndiceDeMaternidadEnLaLaguna

?>
