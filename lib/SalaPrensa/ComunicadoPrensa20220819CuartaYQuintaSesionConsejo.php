<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20220819CuartaYQuintaSesionConsejo
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
 * Clase ComunicadoPrensa20220819CuartaYQuintaSesionConsejo
 */
class ComunicadoPrensa20220819CuartaYQuintaSesionConsejo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN PRESENTA PROPUESTA DE PROYECTOS PARA EL 2023.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2022-08-19T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2022-08-19-cuarta-y-quinta-sesion-consejo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) presentó este viernes a su Consejo Directivo, la propuesta de proyectos para el próximo 2023, así como los objetivos que se planean alcanzar.';
        $this->claves                     = 'IMPLAN, Torreon, consejo, cuarta, quinta, proyectos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20220819CuartaYQuintaSesionConsejo.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20220819CuartaYQuintaSesionConsejo

?>
