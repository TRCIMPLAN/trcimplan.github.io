<?php
/**
 * TrcIMPLAN Sitio Web - DiaMundialDeLasPersonasConSindromeDeDown
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
 * Clase DiaMundialDeLasPersonasConSindromeDeDown
 */
class DiaMundialDeLasPersonasConSindromeDeDown extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Día Mundial de las Personas con Síndrome de Down: Por un mundo inclusivo.';
        $this->autor                      = 'Ing. Ricardo Miranda Briones';
        $this->fecha                      = '2022-04-11T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'dia-mundial-personas-con-sindrome-de-down-abril-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“Todas las personas deben gozar de todos los derechos: civiles, políticos, económicos, sociales y culturales. Sin importar dónde vivan. Sin importar su raza, etnia, religión, origen social, género, orientación sexual, opinión política o de cualquier otra índole, discapacidad, ingresos, ni cualquier otra condición.”
António Guterres, Secretario General de las Naciones Unidas, 2019';
        $this->claves                     = 'IMPLAN, Torreon, sindrome, down, dia, mundial';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DiaMundialDeLasPersonasConSindromeDeDown.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables');
        $this->fuentes                    = array('CEPAL');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DiaMundialDeLasPersonasConSindromeDeDown

?>
