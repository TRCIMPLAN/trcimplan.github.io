<?php
/**
 * TrcIMPLAN Sitio Web - LosMunicipiosFrenteALasAdversidades
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
 * Clase LosMunicipiosFrenteALasAdversidades
 */
class LosMunicipiosFrenteALasAdversidades extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Municipios frente a las adversidades.';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2020-05-06T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-municipios-frente-a-las-adversidades-mayo-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los retos que enfrentan los municipios mexicanos en el siglo XXI no solo tienen que ver con la cobertura de servicios básicos desde las limitaciones presupuestales de siempre; están ligados a las tendencias globales que exigen a sus cambiantes administraciones concebir estrategias para asegurar la adaptación de sus ciudadanos a los grandes retos de movilidad, cambio climático, seguridad, migración, vivienda, empleo, salud, etc.';
        $this->claves                     = 'IMPLAN, Torreon, municipio, servicios, administracion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LosMunicipiosFrenteALasAdversidades.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Población');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LosMunicipiosFrenteALasAdversidades

?>
