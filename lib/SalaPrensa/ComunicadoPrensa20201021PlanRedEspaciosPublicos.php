<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20201021PlanRedEspaciosPublicos
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

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20201021PlanRedEspaciosPublicos
 */
class ComunicadoPrensa20201021PlanRedEspaciosPublicos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN Torreón presenta el Plan Red de Espacios Públicos.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-10-21T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-10-21-plan-red-de-espacios-publicos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se seleccionaron los fraccionamientos Campo Nuevo y Monte Real como áreas prioritarias para el trabajo en campo de la primera fase del diagnóstico.';
        $this->claves                     = 'IMPLAN, Torreon, diagnostico, espacios publicos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20201021PlanRedEspaciosPublicos.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20201021PlanRedEspaciosPublicos

?>
