<?php
/**
 * TrcIMPLAN Sitio Web - BancoDeSuelo
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
 * Clase BancoDeSuelo
 */
class BancoDeSuelo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Banco de suelo: nuevas herramientas para la gestión territorial';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2022-05-30T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'banco-de-suelo-mayo-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La principal fuente de adquisición de suelo para los ayuntamientos es la cesión municipal que se desprende por la autorización de fraccionamientos. Del 2015 al 2021, se autorizaron 55 nuevos desarrollos; los cuales generaron 79,969.86 m2 de suelo urbanizado para equipamiento público y social.';
        $this->claves                     = 'IMPLAN, Torreon, suelo, municipal, uso, fraccionamientos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/BancoDeSuelo.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('PDDU');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase BancoDeSuelo

?>
