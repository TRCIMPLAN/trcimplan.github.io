<?php
/**
 * TrcIMPLAN Sitio Web - LaResilienciaEconomicaDeLaLaguna
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

namespace Blog;

/**
 * Clase LaResilienciaEconomicaDeLaLaguna
 */
class LaResilienciaEconomicaDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La resiliencia económica de La Laguna.';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2020-02-05T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-resiliencia-economica-de-la-laguna-feb2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Zona Metropolitana de La Laguna concentra en la industria manufacturera el 72.85% de la producción bruta total o PBT (INEGI, 2014), ésta se encuentra más diversificada que en regiones como la de Saltillo-Ramos Arizpe.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaResilienciaEconomicaDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaResilienciaEconomicaDeLaLaguna

?>
