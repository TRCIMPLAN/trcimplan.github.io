<?php
/**
 * TrcIMPLAN Sitio Web - AreasDeCesionMunicipalEnLaConstruccionDeEspacioPublico
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
 * Clase AreasDeCesionMunicipalEnLaConstruccionDeEspacioPublico
 */
class AreasDeCesionMunicipalEnLaConstruccionDeEspacioPublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las Áreas de Cesión Municipal en la Construcción de Espacio Público';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2018-09-18T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'areas-de-cesion-municipal-en-la-construccion-de-espacio-publico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La ciudad, en su concepto más básico, es entendida en dos formas básicas: el espacio privado y el espacio público. El primero refiere a todo suelo urbano con carácter de propiedad privada dedicado a actividades de vivienda, comercio, servicios, industria, recreación etc, Su acceso, por definición, no es público y está regulado por él o los propietarios que lo poseen. Por otra parte, el espacio público en la ciudad es todo aquel que pertenece a la totalidad de los ciudadanos (al estado) y por ende su propiedad, uso y dominio es colectivo. Está compuesto por las calles, los parques, las plazas, y los equipamientos urbanos públicos. Es esta compleja red de espacios públicos y privados y sus interacciones sociales las que construyen y le da carácter a la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AreasDeCesionMunicipalEnLaConstruccionDeEspacioPublico.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar','Servicios Públicos');
        $this->fuentes                    = array('Reglamento de Desarrollo Urbano Municipio Torreón');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase AreasDeCesionMunicipalEnLaConstruccionDeEspacioPublico

?>
