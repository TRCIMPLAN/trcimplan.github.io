<?php
/**
 * TrcIMPLAN Sitio Web - ElDesarrolloDeLaLagunaATravesDeLaPlata
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
 * Clase ElDesarrolloDeLaLagunaATravesDeLaPlata
 */
class ElDesarrolloDeLaLagunaATravesDeLaPlata extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El desarrollo de La Laguna a través de la Plata';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2018-06-21T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-desarrollo-de-la-laguna-a-traves-de-la-plata';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'México se colocó por octavo año consecutivo como el mayor productor de plata a nivel mundial, reportando una cifra de 196.4 millones de onzas plata en 2017. Así mismo el 17.57% de las exportaciones de Torreón provienen de la Plata.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElDesarrolloDeLaLagunaATravesDeLaPlata.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Innovación', 'Mercados');
        $this->fuentes                    = array('Asociación de Plata en La Laguna A.C.');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase ElDesarrolloDeLaLagunaATravesDeLaPlata

?>
