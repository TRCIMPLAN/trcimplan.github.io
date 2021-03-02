<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210301PrimeraSesionConsejo
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
 * Clase ComunicadoPrensa20210226PrimeraSesionConsejo
 */
class ComunicadoPrensa20210226PrimeraSesionConsejo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Primera Sesión de Consejo: Presenta IMPLAN el Plan de Infraestructura Verde.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-02-26T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-02-26-primera-sesion-consejo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Plan de Infraestructura Verde se realizó entre el IMPLAN Torreón y la Consultora Soluciones SIG.
        Se proponen 22 polígonos de infraestructura verde como zonas de atención prioritarias.';
        $this->claves                     = 'IMPLAN, Torreon, infraestructura verde, sesion consejo, verde';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210226PrimeraSesionConsejo.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20210301PrimeraSesionConsejo

?>
