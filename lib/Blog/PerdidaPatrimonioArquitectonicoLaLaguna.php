<?php
/**
 * TrcIMPLAN Sitio Web - Pérdida de Patrimonio Arquitectónico en La Laguna
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
 * @package TrcIMPLAN
 */

namespace Blog;

/**
 * Clase PerdidaPatrimonioArquitectonicoLaLaguna
 */
class PerdidaPatrimonioArquitectonicoLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Pérdida de Patrimonio Arquitectónico en La Laguna';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2015-06-23T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'perdida-patrimonio-arquitectonico-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La conservación de las construcciones históricas es responsabilidad de todos. La pérdida y deterioro de estos inmuebles repercute en la identidad y el legado que dejaremos a las siguientes generaciones.';
        $this->claves                     = 'IMPLAN, Torreon, Patrimonio, Arquitectonico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PerdidaPatrimonioArquitectonicoLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PerdidaPatrimonioArquitectonicoLaLaguna

?>
