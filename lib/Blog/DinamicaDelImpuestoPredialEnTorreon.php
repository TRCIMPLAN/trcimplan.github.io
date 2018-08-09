<?php
/**
 * TrcIMPLAN Sitio Web - DinamicaDelImpuestoPredialEnTorreon
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
 * Clase DinamicaDelImpuestoPredialEnTorreon
 */
class DinamicaDelImpuestoPredialEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Dinámica del impuesto predial en Torreón';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2018-08-09T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'dinamica-del-impuesto-predial-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los municipios de Coahuila recaudaron en el 2016 el equivalente a casi 817 millones de pesos en este impuesto, de los cuales se tiene que, en el mismo año, en Torreón se recaudaron 206 millones, un 10% más de los 187 millones originalmente presupuestados al inicio de ese mismo año.';
        $this->claves                     = 'IMPLAN, Torreon, recaudacion, impuestos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DinamicaDelImpuestoPredialEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Finanzas Públicas','Competitividad');
        $this->fuentes                    = array('OECD');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase DinamicaDelImpuestoPredialEnTorreon

?>
