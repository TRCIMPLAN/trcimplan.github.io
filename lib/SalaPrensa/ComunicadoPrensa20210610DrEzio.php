<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210610DrEzio
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
 * Clase ComunicadoPrensa20210610DrEzio
 */
class ComunicadoPrensa20210610DrEzio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN invita a conferencia virtual con especialista en mejora regulatoria.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-06-10T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-06-10-comunicado-drezio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Uno de los ejes transversales de la administración municipal es la mejora regulatoria que tiene como objetivo simplificar los procesos administrativos para disminuir tiempos y costos para la ciudadanía a través de una normatividad clara e incentivos que motiven la inversión privada para la generación de empleos.';
        $this->claves                     = 'IMPLAN, Torreon, mejora, regulatoria, empleos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210610DrEzio.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20210610DrEzio

?>
