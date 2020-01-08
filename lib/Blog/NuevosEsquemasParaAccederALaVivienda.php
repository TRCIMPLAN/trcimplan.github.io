<?php
/**
 * TrcIMPLAN Sitio Web - NuevosEsquemasParaAccederALaVivienda
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
 * Clase NuevosEsquemasParaAccederALaVivienda
 */
class NuevosEsquemasParaAccederALaVivienda extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Nuevos esquemas para acceder a la vivienda.';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2020-01-06T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'nuevos-esquemas-para-acceder-a-la-vivienda-enero2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La vivienda puede ser concebida como el espacio que habitan las personas y familias. Es un derecho humano garantizado por la Constitución Política y para poder acceder a ella, se crearon diferentes organismos que cuentan con diversas soluciones financieras.';
        $this->claves                     = 'IMPLAN, Torreon, vivienda, creditos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/NuevosEsquemasParaAccederALaVivienda.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array('Infonavit');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase NuevosEsquemasParaAccederALaVivienda

?>
