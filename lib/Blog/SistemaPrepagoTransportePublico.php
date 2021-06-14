<?php
/**
 * TrcIMPLAN Sitio Web - SistemaPrepagoTransportePublico
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
 * Clase SistemaPrepagoTransportePublico
 */
class SistemaPrepagoTransportePublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Beneficios del Sistema de Prepago en el Transporte Público';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2021-06-14T00:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'beneficio-sistema-prepago-transporte-publico-jun-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Según datos del Censo de Población y Vivienda 2020, el transporte público es el segundo medio más utilizado para trasladarse al trabajo, con un porcentaje de uso del 25.20% en la ZML y un 27.66% para Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, prepago, transporte, publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SistemaPrepagoTransportePublico.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array('Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SistemaPrepagoTransportePublico

?>
