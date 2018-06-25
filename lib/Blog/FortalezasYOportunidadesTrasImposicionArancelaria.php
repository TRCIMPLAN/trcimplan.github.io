<?php
/**
 * TrcIMPLAN Sitio Web - FortalezasYOportunidadesTrasImposicionArancelaria
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
 * Clase FortalezasYOportunidadesTrasImposicionArancelaria
 */
class FortalezasYOportunidadesTrasImposicionArancelaria extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Fortalezas y oportunidades tras imposición arancelaria';
        $this->autor                      = 'Lic. Daniel Alejandro López Murga';
        $this->fecha                      = '2018-06-25T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'fortalezas-y-oportunidades-tras-imposicion-arancelaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Tras las amenazas de Trump sobre la imposición de aranceles y la renegociación del TLCAN, las exportaciones e importaciones mexicanas se han diversificado a grandes pasos. Tan sólo en abril las exportaciones no petroleras de México a países diferentes a EUA incrementaron 35.4% (INEGI).';
        $this->claves                     = 'IMPLAN, Torreon, Aranceles, TLCAN';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/FortalezasYOportunidadesTrasImposicionArancelaria.md';
        // Para el Organizador
        $this->categorias                 = array('Mercados', 'Competitividad', 'Empresas', 'Macroeconomía');
        $this->fuentes                    = array('Observatorio de Complejidad Económica', 'INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase FortalezasYOportunidadesTrasImposicionArancelaria

?>
