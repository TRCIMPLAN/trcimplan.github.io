<?php
/**
 * TrcIMPLAN Sitio Web - RetosParaElEmprendedurismoLagunero
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
 * Clase RetosParaElEmprendedurismoLagunero
 */
class RetosParaElEmprendedurismoLagunero extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Retos para el Emprendedurismo Lagunero';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2019-01-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'retos-para-el-emprendedurismo-lagunero-ene2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Una nueva empresa en Torreón tendrá una esperanza de vida de 7.0 años (INEGI, 2016) y a los 5 años sólo quedarán un tercio de los negocios iniciados, mientras que a nivel nacional la esperanza es de 7.8 años y en 5 años habrán cerrado el 65% de estas nuevas empresas.';
        $this->claves                     = 'IMPLAN, Torreon, emprendedurismo, negocios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RetosParaElEmprendedurismoLagunero.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas');
        $this->fuentes                    = array('INEGI','SIEM');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase RetosParaElEmprendedurismoLagunero

?>
