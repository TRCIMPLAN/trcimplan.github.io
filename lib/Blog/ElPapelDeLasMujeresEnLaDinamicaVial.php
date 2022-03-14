<?php
/**
 * TrcIMPLAN Sitio Web - ElPapelDeLasMujeresEnLaDinamicaVial
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
 * Clase ElPapelDeLasMujeresEnLaDinamicaVial
 */
class ElPapelDeLasMujeresEnLaDinamicaVial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Dinámica Vial de las Mujeres en Torreón';
        $this->autor                      = 'Arq. Olga Daniela Sánchez Valles';
        $this->fecha                      = '2022-03-14T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-papel-de-las-mujeres-en-la-dinamica-vial-mar-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Hoy en día, diversas instituciones a nivel internacional han resaltado la importancia de fomentar la seguridad vial para la población. Es a través de la Agenda 2030 y los Objetivos del Desarrollo Sostenible, específicamente en sus metas 3.6 y 11.2, que la Organización de las Naciones Unidas busca reducir en un 50% las muertes por lesiones de tránsito y garantizar el acceso a un transporte público accesible para todas y todos.';
        $this->claves                     = 'IMPLAN, Torreon, vial, mujeres, vialidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElPapelDeLasMujeresEnLaDinamicaVial.md';
        // Para el Organizador
        $this->categorias                 = array('Género', 'Vialidad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ElPapelDeLasMujeresEnLaDinamicaVial

?>
