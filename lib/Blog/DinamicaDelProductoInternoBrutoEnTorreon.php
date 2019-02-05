<?php
/**
 * TrcIMPLAN Sitio Web - DinamicaDelProductoInternoBrutoEnTorreon
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
 * Clase DinamicaDelProductoInternoBrutoEnTorreon
 */
class DinamicaDelProductoInternoBrutoEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Dinámica del Producto Interno Bruto en Torreón';
        $this->autor                      = 'Lic. Daniel Alejandro López Murga';
        $this->fecha                      = '2019-02-05T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'dinamica-del-producto-interno-bruto-en-torreon-feb2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La estimación del Producto Interno bruto (PIB) de Torreón para 2017 es de 193,431 millones de pesos, con un crecimiento anual estimado de 5.93%.';
        $this->claves                     = 'IMPLAN, Torreon, PIB torreon, Producto interno bruto';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DinamicaDelProductoInternoBrutoEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Macroeconomía');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase DinamicaDelProductoInternoBrutoEnTorreon

?>
