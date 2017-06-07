<?php
/**
 * TrcIMPLAN Sitio Web - Elección de Consejeros de Representación Sectorial 2015
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

namespace ConsejoDirectivo;

/**
 * Clase EleccionDeConsejerosDeRepresentacionSectorial2015
 */
class EleccionDeConsejerosDeRepresentacionSectorial2015 extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Elección de Consejeros de Representación Sectorial 2015';
        $this->fecha                      = '2015-12-17T14:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'eleccion-de-consejeros-de-representacion-sectorial-2015';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Resultado del proceso de elección de los ciudadanos que van a formar parte del Consejo Directivo como Consejeros de Representación Sectorial en el IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Convocatoria, 2015, Consejo Directivo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ConsejoDirectivo/EleccionDeConsejerosDeRepresentacionSectorial2015.md';
    } // constructor

} // Clase EleccionDeConsejerosDeRepresentacionSectorial2015

?>
