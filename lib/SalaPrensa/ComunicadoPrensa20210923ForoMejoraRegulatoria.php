<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210923ForoMejoraRegulatoria
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
 * Clase ComunicadoPrensa20210923ForoMejoraRegulatoria
 */
class ComunicadoPrensa20210923ForoMejoraRegulatoria extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN invita a Foro: Los Retos de la Mejora Regulatoria: Perspectivas Administrativas, Legislativas y Académicas.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-09-24T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-09-24-foro-mejora-regulatoria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con la reciente integración del IMPLAN Torreón en la Asociación Mexicana de Institutos Municipales de Planeación (AMIMP), el Arq. José Antonio Ramírez Reyes, director del Instituto de Planeación de Torreón, logró concretar la visita a nuestra ciudad del L.R.N. Felipe Salazar Correa, quien es el Director del Instituto Municipal de Planeación de Tepatitlán de Morelos, Jalisco; con el objetivo de presentar la conferencia “Simplificación Administrativa para el Desarrollo Urbano y la Gestión Catastral”, en donde presentará los detalles de su proyecto “Visor Urbano”.';
        $this->claves                     = 'IMPLAN, Torreon, amimp, tepatitlan, foro, mejora, regulatoria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210923ForoMejoraRegulatoria.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20210923ForoMejoraRegulatoria

?>
