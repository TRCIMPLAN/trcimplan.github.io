<?php
/**
 * TrcIMPLAN Sitio Web - El CIDE premia al IMPLAN por el uso efectivo de las Tecnologías de la Información y de la Comunicación
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
 * Clase ElCIDEPremiaAlIMPLAN
 */
class ElCIDEPremiaAlIMPLAN extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El CIDE premia al IMPLAN por el uso efectivo de las Tecnologías de la Información y de la Comunicación';
        $this->fecha                      = '2015-11-24T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-11-24-el-cide-premia-al-implan';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Recibirán el galardón del Premio Gobierno y Gestión Local 2015 el próximo 1 de diciembre en la Ciudad de Aguascalientes.';
        $this->claves                     = 'IMPLAN, Torreon, CIDE, INFOTEC, Tecnologias, Informacion, Reconocimiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ElCIDEPremiaAlIMPLAN.md';
        // Para el Organizador
        $this->categorias                 = array('Innovación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ElCIDEPremiaAlIMPLAN

?>
