<?php
/**
 * TrcIMPLAN Sitio Web - SeguridadVialYSeguridadPeatonal
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
 * Clase ManualDeCallesYLaSeguridadVial
 */
class ManualDeCallesYLaSeguridadVial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Manual de calles y la seguridad vial.';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2020-09-08T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'manual-de-calles-y-la-seguridad-vial-sep-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La calle es la base de cualquier sistema de movilidad urbana, y también uno de los pilares del desarrollo económico de las ciudades.';
        $this->claves                     = 'IMPLAN, Torreon, movilidad urbana, calle, ciudades';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ManualDeCallesYLaSeguridadVial.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array('Implan');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ManualDeCallesYLaSeguridadVial

?>
