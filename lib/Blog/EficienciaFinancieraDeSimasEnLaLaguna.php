<?php
/**
 * TrcIMPLAN Sitio Web - EficienciaFinancieraDeSimasEnLaLaguna
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
 * Clase EficienciaFinancieraDeSimasEnLaLaguna
 */
class EficienciaFinancieraDeSimasEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La eficiencia financiera de los Sistemas Municipales de Aguas y Saneamiento en La Laguna.';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2019-03-04T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'eficiencia-financiera-de-simas-en-la-laguna-marzo2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con la CONAGUA, el SIMAS Rural cuenta con 17 títulos de derechos de agua de los cuales 12 se encuentran en la mancha urbana de Torreón. En el último avance de gestión para el 2018, reportan que 15 de los 17 pozos con los que cuenta el organismo están operando, atendiendo a 38,527 hogares de los cuales 82.83% están en Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, simas, agua en torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EficienciaFinancieraDeSimasEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Servicios Públicos', 'Recursos Naturales');
        $this->fuentes                    = array('CONAGUA', 'SIMAS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EficienciaFinancieraDeSimasEnLaLaguna

?>
