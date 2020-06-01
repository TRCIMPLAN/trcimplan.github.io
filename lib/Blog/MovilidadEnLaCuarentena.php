<?php
/**
 * TrcIMPLAN Sitio Web - MovilidadEnLaCuarentena
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
 * Clase MovilidadEnLaCuarentena
 */
class MovilidadEnLaCuarentena extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La movilidad urbana durante la cuarentena.';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2020-06-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'movilidad-en-la-cuarentena-junio-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El pasado 28 de febrero México entraba a la Fase 1 por la pandemia causada por la enfermedad COVID-19, el Gobierno Federal informó del primer caso y la entrada a una primera fase, en la que se aplicarían algunas recomendaciones para evitar su propagación.';
        $this->claves                     = 'IMPLAN, Torreon, movilidad, cuarentena, covid';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MovilidadEnLaCuarentena.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad','Salud');
        $this->fuentes                    = array('Implan');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MovilidadEnLaCuarentena

?>
