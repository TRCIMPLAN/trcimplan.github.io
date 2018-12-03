<?php
/**
 * TrcIMPLAN Sitio Web - ElTransportePublicoEnLaMovilidadUrbanaDeTorreon
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
 * Clase ElTransportePublicoEnLaMovilidadUrbanaDeTorreon
 */
class ElTransportePublicoEnLaMovilidadUrbanaDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'EL TRANSPORTE PÚBLICO EN LA MOVILIDAD URBANA DE TORREÓN';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2018-12-03T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-transporte-publico-en-la-movilidad-urbana-de-torreon-dic2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La capacidad de los autobuses en operación es de 80 pasajeros, sin embargo, la ocupación máxima está en un rango de 31 a 40 pasajeros. El 72% de las rutas identificadas se estimó están por debajo del 50% de capacidad de las unidades.';
        $this->claves                     = 'IMPLAN, Torreon, Transporte publico, movilidad, accidentes viales';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElTransportePublicoEnLaMovilidadUrbanaDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Infraestructura');
        $this->fuentes                    = array('Direccion de Movilidad');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ElTransportePublicoEnLaMovilidadUrbanaDeTorreon

?>
