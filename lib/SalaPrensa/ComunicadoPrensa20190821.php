<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20190821
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

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20190821
 */
class ComunicadoPrensa20190821 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Se mantiene el empleo en La Laguna';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2019-08-21T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-08-21-empleo-julio-2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Para el mes de julio 2019, en La Laguna se registraron en el IMSS 305,134 empleos asociados a un trabajo.';
        $this->claves                     = 'IMPLAN, Torreon, imss, asegurados, empleos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20190821.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('IMSS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20190821

?>
