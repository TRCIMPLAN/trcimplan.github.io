<?php
/**
 * TrcIMPLAN Sitio Web - ElCrecimientoDeLaCiudad
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
 * Clase ElCrecimientoDeLaCiudad
 */
class ElCrecimientoDeLaCiudad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El crecimiento de la ciudad y su impacto en el transporte público';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2018-06-06T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-crecimiento-de-la-ciudad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Dirección de Vialidad y Movilidad Urbana de Torreón registra un total de 28 rutas de transporte público, que desde 2017, cobran a usuarios en general un precio de $ 11.00 pesos. La tarifa de descuento para usuarios de prepago es de $ 9.60 y la preferencial para personas de la tercera edad, con discapacidad y a estudiantes de $ 7.00.';
        $this->claves                     = 'IMPLAN, Torreon, Transporte publico, crecimiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElCrecimientoDeLaCiudad.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Movilidad', 'Infraestructura');
        $this->fuentes                    = array('Universidad Finis Terrae', 'ONU-Habitat','Plan Director de Desarrollo Urbano de Torreón 2014', 'IMEPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ElCrecimientoDeLaCiudad

?>
