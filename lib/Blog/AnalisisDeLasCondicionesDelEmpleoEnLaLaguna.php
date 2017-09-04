<?php
/**
 * TrcIMPLAN Sitio Web - AnalisisDeLasCondicionesDelEmpleoEnLaLaguna
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
 * Clase AnalisisDeLasCondicionesDelEmpleoEnLaLaguna
 */
class AnalisisDeLasCondicionesDelEmpleoEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Análisis de las condiciones del empleo en La Laguna';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2017-09-04T11:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'analisis-de-las-condiciones-del-empleo-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con el INEGI, en el segundo trimestre del año la población ocupada representó 95% de la Población Económicamente Activa (PEA). En esta clasificación se encuentran tanto los empleos formales como los informales, los empleadores, subordinados y trabajadores por cuenta propia.';
        $this->claves                     = 'IMPLAN, Torreon, Empleo, La Laguna, Analisis';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AnalisisDeLasCondicionesDelEmpleoEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AnalisisDeLasCondicionesDelEmpleoEnLaLaguna

?>
