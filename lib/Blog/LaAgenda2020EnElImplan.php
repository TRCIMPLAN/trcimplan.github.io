<?php
/**
 * TrcIMPLAN Sitio Web - LaAgenda2020EnElImplan
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
 * Clase LaAgenda2020EnElImplan
 */
class LaAgenda2020EnElImplan extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Agenda 2020 en el IMPLAN';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2019-12-23T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'agenda-2020-en-el-implan-dic2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“En el 2020 La Laguna será la primera sede de la Red Nacional Metropolitana organizada por la Secretaría de Desarrollo Agrario, Territorial y Urbano” (SEDATU).';
        $this->claves                     = 'IMPLAN, Torreon, agenda';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaAgenda2020EnElImplan.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaAgenda2020EnElImplan

?>
