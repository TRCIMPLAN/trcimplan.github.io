<?php
/**
 * TrcIMPLAN Sitio Web - ManosALaCebraReporte
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
 * Clase ManosALaCebraReporte
 */
class ManosALaCebraReporte extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Manos a la Cebra';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2019-09-24T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-09-24-manos-a-la-cebra-reporte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los pasos peatonales deben formar parte del espacio público asignado para que de forma segura los caminantes podamos cruzar las calles. Es un derecho de los peatones y como tal se deben respetar.';
        $this->claves                     = 'IMPLAN, Torreon, pasos peatonales, manos a la cebra';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ManosALaCebraReporte.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ManosALaCebraReporte

?>
