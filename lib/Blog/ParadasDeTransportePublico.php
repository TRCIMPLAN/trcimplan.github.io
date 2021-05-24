<?php
/**
 * TrcIMPLAN Sitio Web - ParadasDeTransportePublico
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
 * Clase ParadasDeTransportePublico
 */
class ParadasDeTransportePublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Paradas de transporte público, de zonas de transición a espacios públicos.';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2021-05-24T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'paradas-de-transporte-publico-may-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo al Censo de Población y Vivienda 2020, en Torreón el 27.6% de los traslados para llegar al trabajo se hacen en camión, autobús, combi, colectivo, y del mismo modo los traslados a la escuela representan el 21.96% por lo que las paradas para tomar algún transporte público son un espacio de uso cotidiano entre la ciudadanía.';
        $this->claves                     = 'IMPLAN, Torreon, traslados, trabajo, transporte';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ParadasDeTransportePublico.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ParadasDeTransportePublico

?>
