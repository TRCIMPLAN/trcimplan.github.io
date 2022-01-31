<?php
/**
 * TrcIMPLAN Sitio Web - JusticiaSocialTrabajadorasDelHogar
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
 * Clase JusticiaSocialTrabajadorasDelHogar
 */
class JusticiaSocialTrabajadorasDelHogar extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Justicia Social: ¿Dónde Quedan las Trabajadoras del Hogar?';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2022-01-31T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'justicia-social-trabajadoras-del-hogar-ene-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Derivado de una decisión de la Suprema Corte de Justicia de la Nación, el Instituto Mexicano del Seguro Social opera un mecanismo piloto para el aseguramiento de las personas trabajadoras del hogar.';
        $this->claves                     = 'IMPLAN, Torreon, justicia, social, hogar, trabajadoras';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/JusticiaSocialTrabajadorasDelHogar.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Género');
        $this->fuentes                    = array('OIT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase JusticiaSocialTrabajadorasDelHogar

?>
