<?php
/**
 * TrcIMPLAN Sitio Web - SesionOrdinaria20170126
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
 * Clase SesionOrdinaria20170126
 */
class SesionOrdinaria20170126 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presentan la Plataforma del Conocimiento trcimplan.gob.mx';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2017-01-26T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-01-26-sesion-ordinaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El IMPLAN Torreón llevó a cabo su primera sesión de Consejo Directivo de 2017, con el fin de presentar a los consejeros y asistentes cómo pueden utilizar la Plataforma del Conocimiento.';
        $this->claves                     = 'IMPLAN, Torreon, Plataforma, Sitio Web, Conocimiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SesionOrdinaria20170126.md';
        // Para el Organizador
        $this->categorias                 = array('Innovación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase SesionOrdinaria20170126

?>
