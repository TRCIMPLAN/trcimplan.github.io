<?php
/**
 * TrcIMPLAN Sitio Web - SimplificandoTramitesMunicipales
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
 * Clase SimplificandoTramitesMunicipales
 */
class SimplificandoTramitesMunicipales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Simplificando los trámites Municipales';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2021-08-06T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'simplificando-los-tramites-municipales-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“La Constancia de Alineamiento y Número Oficial es la llave para comenzar la gestión de los permisos de construcción en nuestro país. Además, es el requisito principal para cualquier operación de compra-venta de inmuebles y para la contratación de servicios eléctricos o de suministro de agua potable”.';
        $this->claves                     = 'IMPLAN, Torreon, tramites, municipales, permisos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SimplificandoTramitesMunicipales.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno Digital', 'Servicios Públicos');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SimplificandoTramitesMunicipales

?>
