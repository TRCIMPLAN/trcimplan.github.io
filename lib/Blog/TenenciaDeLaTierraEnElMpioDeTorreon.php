<?php
/**
 * TrcIMPLAN Sitio Web - TenenciaDeLaTierraEnElMpioDeTorreon
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
 * Clase TenenciaDeLaTierraEnElMpioDeTorreon
 */
class TenenciaDeLaTierraEnElMpioDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Tenencia de la Tierra en el Municipio de Torreón';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2020-10-13T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'tenencia-de-la-tierra-en-el-mpio-de-torreon-oct-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Es importante conocer y diferenciar los diferentes regímenes de propiedad que existen al interior del municipio, ya que los actos y requisitos para poseer una determinada superficie de tierra depende del régimen de propiedad al que esta pertenezca como puede ser: propiedad social, propiedad privada y propiedad pública.';
        $this->claves                     = 'IMPLAN, Torreon, tenencia, tierra, municipio, propiedad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TenenciaDeLaTierraEnElMpioDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda', 'Bienestar');
        $this->fuentes                    = array('Phina');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TenenciaDeLaTierraEnElMpioDeTorreon

?>
