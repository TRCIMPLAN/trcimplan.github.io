<?php
/**
 * TrcIMPLAN Sitio Web - ComportamientoDeLaInflacionYElSalarioEnLalaguna
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
 * Clase ComportamientoDeLaInflacionYElSalarioEnLalaguna
 */
class ComportamientoDeLaInflacionYElSalarioEnLalaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Comportamiento de la inflación y el salario en La Laguna';
        $this->autor                      = array('Lic. Daniel Alejandro López Murga', 'Lic. Frida García Gutiérrez');
        $this->fecha                      = '2018-04-17T08:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'comportamiento-de-la-inflacion-y-el-salario-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Durante los últimos cinco años, la inflación anual promedio en la ZML ha sido del 4.16% comparada con la nacional que se ubica en 4.06%. Sin embargo, de acuerdo con las últimas estimaciones del PIB, la región ha mantenido un crecimiento sobresaliente.';
        $this->claves                     = 'IMPLAN, Torreon, Inflacion, ZML, Laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ComportamientoDeLaInflacionYElSalarioEnLalaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Competitividad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComportamientoDeLaInflacionYElSalarioEnLalaguna

?>
