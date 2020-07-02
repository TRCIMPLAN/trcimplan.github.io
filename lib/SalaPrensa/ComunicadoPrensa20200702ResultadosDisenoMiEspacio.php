<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200702ResultadosDisenoMiEspacio
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
 * Clase ComunicadoPrensa20200702ResultadosDisenoMiEspacio
 */
class ComunicadoPrensa20200702ResultadosDisenoMiEspacio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Finaliza con éxito el concurso “Diseño Mi Espacio”';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-07-03T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-07-03-resultado-diseno-mi-espacio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Consejo Visión Metrópoli del IMPLAN Torreón, presentó el proyecto ganador de la convocatoria y el proyecto favorito del público, del concurso “Diseño Mi Espacio”, el cual, dentro de sus propósitos, contempla compartir con la ciudadanía los diseños de mobiliario modular, que los concursantes propusieron ante este periodo de contingencia.';
        $this->claves                     = 'IMPLAN, Torreon, vision metropoli, diseno mi espacio, convocatoria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200702ResultadosDisenoMiEspacio.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200702ResultadosDisenoMiEspacio

?>
