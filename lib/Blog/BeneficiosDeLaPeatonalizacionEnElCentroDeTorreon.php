<?php
/**
 * TrcIMPLAN Sitio Web - Beneficios de la peatonalización en el Centro de Torreón
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * Clase BeneficiosDeLaPeatonalizacionEnElCentroDeTorreon
 */
class BeneficiosDeLaPeatonalizacionEnElCentroDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Beneficios de la peatonalización en el Centro de Torreón';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2016-09-23T13:35';
        // El nombre del archivo a crear
        $this->archivo                    = 'beneficios-de-la-peatonalizacion-en-el-centro-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con INEGI 12.6% de la población de 12 a 65 años realiza traslados a pie por estudio o trabajo. En el centro se ha lanzado el primer proyecto peatonal de la ciudad: El Paseo Morelos con estrategias como la pacificación del tránsito, señalización y cruces seguros.';
        $this->claves                     = 'IMPLAN, Torreon, Paseo Morelos, Peatones, Movilidad, Caminar';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/BeneficiosDeLaPeatonalizacionEnElCentroDeTorreon.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Movilidad', 'Vialidad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase BeneficiosDeLaPeatonalizacionEnElCentroDeTorreon

?>
