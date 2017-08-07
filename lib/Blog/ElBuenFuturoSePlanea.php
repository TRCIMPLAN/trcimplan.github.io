<?php
/**
 * TrcIMPLAN Sitio Web - ElBuenFuturoSePlanea
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
 * Clase ElBuenFuturoSePlanea
 */
class ElBuenFuturoSePlanea extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El buen futuro se planea';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2017-08-07T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-buen-futuro-se-planea';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el Índice Básico de Ciudades Prósperas presentado por ONU Hábitat, Torreón obtuvo una calificación de 55.51 en una escala del 1 al 100, situándose como moderadamente débil. Sin embargo, en sub dimensiones como Educación, Salud o Inclusión de género se colocó en una escala moderadamente sólida.';
        $this->claves                     = 'IMPLAN, Torreon, ONU, Hábitat, Índice, Ciudades, Prósperas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElBuenFuturoSePlanea.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Movilidad', 'Población', 'Vialidad');
        $this->fuentes                    = array('ONU-Habitat');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase ElBuenFuturoSePlanea

?>
