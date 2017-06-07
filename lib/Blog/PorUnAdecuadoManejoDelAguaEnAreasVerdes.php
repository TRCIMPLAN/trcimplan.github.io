<?php
/**
 * TrcIMPLAN Sitio Web - Por un Adecuado Manejo del Agua en Áreas Verdes
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
 * Clase PorUnAdecuadoManejoDelAguaEnAreasVerdes
 */
class PorUnAdecuadoManejoDelAguaEnAreasVerdes extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Por un Adecuado Manejo del Agua en Áreas Verdes';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2015-08-25T21:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'por-un-adecuado-manejo-del-agua-en-areas-verdes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Estrategias específicas para las áreas verdes de la región que tienen en cuenta el uso moderado del agua.';
        $this->claves                     = 'IMPLAN, Torreon, La Laguna, Areas Verdes, Agua, Riego';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PorUnAdecuadoManejoDelAguaEnAreasVerdes.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Recursos Naturales');
        $this->fuentes                    = array('Comisión Nacional del Agua (CONAGUA)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'La Laguna');
    } // constructor

} // Clase PorUnAdecuadoManejoDelAguaEnAreasVerdes

?>
