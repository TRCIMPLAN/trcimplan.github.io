<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200520RespuestaReglamentoDRO
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
 * Clase ComunicadoPrensa20200520RespuestaReglamentoDRO
 */
class ComunicadoPrensa20200520RespuestaReglamentoDRO extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN Torreón pide eliminar campaña de desinformación sobre el nuevo Reglamento de Desarrollo Urbano y Construcción.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-05-20T00:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-05-20-comunicado-respuesta-reglamento-dro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Como IMPLAN, reconocemos la labor que tienen los colegios de profesionistas en la construcción responsable y con visión de ciudad sostenible en miras de una mejor calidad de vida.';
        $this->claves                     = 'IMPLAN, Torreon, colegios, profesionistas, construccion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200520RespuestaReglamentoDRO.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20200520RespuestaReglamentoDRO

?>
