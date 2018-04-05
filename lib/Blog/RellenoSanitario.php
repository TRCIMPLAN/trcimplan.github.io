<?php
/**
 * TrcIMPLAN Sitio Web - RellenoSanitario
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
 * Clase RellenoSanitario
 */
class RellenoSanitario extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '¿Qué es un relleno sanitario?';
        $this->autor                      = 'Q.F.B. Susana Estens de la Garza';
        $this->fecha                      = '2018-04-05T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'relleno-sanitario';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '¿Por qué en países como Corea o Japón no se observan acumulamientos de residuos? ¿Qué nos hace diferentes? Cuando no encuentres un basurero en la calle, llévate TU basura. Tú la generaste.';
        $this->claves                     = 'IMPLAN, Torreon, Relleno Sanitario, Basura';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RellenoSanitario.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Recursos Naturales');
        $this->fuentes                    = array('IMPLAN','PROINDER');
        $this->regiones                   = array('Torreón', 'Matamoros');
    } // constructor

} // Clase RellenoSanitario

?>
