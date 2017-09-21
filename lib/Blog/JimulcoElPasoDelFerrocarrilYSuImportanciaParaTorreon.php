<?php
/**
 * TrcIMPLAN Sitio Web - JimulcoElPasoDelFerrocarrilYSuImportanciaParaTorreon
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
 * Clase JimulcoElPasoDelFerrocarrilYSuImportanciaParaTorreon
 */
class JimulcoElPasoDelFerrocarrilYSuImportanciaParaTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Jimulco: El paso del ferrocarril y su importancia para Torreón';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2017-09-21T08:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'jimulco-el-paso-del-ferrocarril-y-su-importancia-para-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón como gran productor de algodón aceleró su crecimiento desde que formó parte de la ruta del Ferrocarril Central Mexicano. Por Jimulco también pasa esta vía férrea y los hechos históricos que ahí ocurrieron moldearon el futuro de la Comarca Lagunera.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/JimulcoElPasoDelFerrocarrilYSuImportanciaParaTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Población');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
        // Banderas
        $this->aparece_en_pagina_inicial  = FALSE;
        $this->poner_imagen_en_contenido  = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'revisar';
    } // constructor

} // Clase JimulcoElPasoDelFerrocarrilYSuImportanciaParaTorreon

?>
