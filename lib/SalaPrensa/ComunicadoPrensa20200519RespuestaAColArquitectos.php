<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200519RespuestaAColArquitectos
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
 * Clase ComunicadoPrensa20200519RespuestaAColArquitectos
 */
class ComunicadoPrensa20200519RespuestaAColArquitectos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Postura del IMPLAN Torreón respecto a la inconformidad por parte del Colegio de Arquitectos de la Comarca Lagunera';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2020-05-19T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-05-19-comunicado-respuesta-colegio-arquitectos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Licenciado Eduardo Holguín, Director del Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) en respuesta al desplegado publicado por el Colegio de Arquitectos de la Comarca Lagunera A.C. en el periódico “El Siglo de Torreón” el día de hoy, en donde se hace referencia al nuevo Reglamento de Desarrollo Urbano y Construcción.';
        $this->claves                     = 'IMPLAN, Torreon, reglamento, desarrollo urbano, colegio arquitectos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200519RespuestaAColArquitectos.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200519RespuestaAColArquitectos

?>
