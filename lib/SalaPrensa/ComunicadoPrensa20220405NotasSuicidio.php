<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20220405NotasSuicidio
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
 * Clase ComunicadoPrensa20220405NotasSuicidio
 */
class ComunicadoPrensa20220405NotasSuicidio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Consejo Visión Metrópoli presenta Manual de Notas Periodísticas sobre Suicidio.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2022-04-05T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2022-04-05-comunicado-notas-suicidio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Consejo Visión Metrópoli (estrategia de participación ciudadana joven, convocada por el IMPLAN Torreón) en conjunto con Red MOTUS (red de apoyo para la promoción de la salud mental y la prevención del suicidio) presentaron este martes el Manual de Notas Periodísticas sobre Suicidio: ¿Cómo se redactan?, en las instalaciones del Centro de Innovación de la Universidad La Salle Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, suicidio, vision, metropoli, periodismo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20220405NotasSuicidio.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20220405NotasSuicidio

?>
