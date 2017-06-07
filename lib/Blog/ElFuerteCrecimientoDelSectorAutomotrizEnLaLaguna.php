<?php
/**
 * TrcIMPLAN Sitio Web - El fuerte crecimiento del sector automotriz en La Laguna
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
 * Clase ElFuerteCrecimientoDelSectorAutomotrizEnLaLaguna
 */
class ElFuerteCrecimientoDelSectorAutomotrizEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El fuerte crecimiento del sector automotriz en La Laguna';
        $this->autor                      = array('Lic. Alicia Valdez Ibarra', 'Lic. Adriana Vargas Flores');
        $this->fecha                      = '2015-10-06T12:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-fuerte-crecimiento-del-sector-automotriz-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La participación económica de la industria automotriz en la Comarca Lagunera ha crecido aceleradamente, tan sólo en Torreón el personal ocupado en las distintas ramas de este sector representa más de 20% del empleo total del municipio.';
        $this->claves                     = 'IMPLAN, Torreon, Industria Automotriz, La Laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElFuerteCrecimientoDelSectorAutomotrizEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Empresas',);
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase ElFuerteCrecimientoDelSectorAutomotrizEnLaLaguna

?>
