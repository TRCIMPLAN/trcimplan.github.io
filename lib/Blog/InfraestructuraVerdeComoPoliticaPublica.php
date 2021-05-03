<?php
/**
 * TrcIMPLAN Sitio Web - InfraestructuraVerdeComoPoliticaPublica
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
 * Clase InfraestructuraVerdeComoPoliticaPublica
 */
class InfraestructuraVerdeComoPoliticaPublica extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Infraestructura verde como política pública municipal';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2021-05-03T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'infraestructura-verde-como-politica-publica-abr-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La zona oriente de la ciudad en fraccionamientos como Ciudad Nazas, Sol de Oriente y Villas Universidad es la que menor temperatura superficial registra con un promedio de 25°C.';
        $this->claves                     = 'IMPLAN, Torreon, infraestructura, verde, politica, publica';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InfraestructuraVerdeComoPoliticaPublica.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase InfraestructuraVerdeComoPoliticaPublica

?>
