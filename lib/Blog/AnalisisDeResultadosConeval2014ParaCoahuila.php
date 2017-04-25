<?php
/**
 * TrcIMPLAN Sitio Web - Análisis de Resultados CONEVAL 2014 para Coahuila
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase AnalisisDeResultadosConeval2014ParaCoahuila
 */
class AnalisisDeResultadosConeval2014ParaCoahuila extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Análisis de Resultados CONEVAL 2014 para Coahuila';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2015-08-12T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'analisis-de-resultados-coneval-2014-para-coahuila';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Julio de 2015 se publicó el Informe de Medición de la Pobreza en México 2014, a cargo del CONEVAL. En este trabajo se analizan los cálculos para el estado de Coahuila así como los nacionales.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/AnalisisDeResultadosConeval2014ParaCoahuila.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Grupos Vulnerables');
        $this->fuentes                    = array('CONAPO', 'CONEVAL');
        $this->regiones                   = array('Coahuila', 'Nacional');
    } // constructor

} // Clase AnalisisDeResultadosConeval2014ParaCoahuila

?>
