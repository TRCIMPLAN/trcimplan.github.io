<?php
/**
 * TrcIMPLAN Sitio Web - DesarrolloDeLaAperturaComercialEnLaLaguna
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
 * Clase DesarrolloDeLaAperturaComercialEnLaLaguna
 */
class DesarrolloDeLaAperturaComercialEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Desarrollo de la apertura comercial en La Laguna';
        $this->autor                      = 'Lic. Daniel Alejandro López Murga';
        $this->fecha                      = '2018-10-15T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'desarrollo-de-la-apertura-comercial-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 37.2% de las exportaciones de Torreón son de oro, superando los 2 mil millones de dólares vendidos de este material; cifra que coincide con la elevada cantidad de empresas de minería de oro en La Laguna (siete), siendo el quinto giro con mayor número de empresas con capital extranjero.';
        $this->claves                     = 'IMPLAN, Torreon, exportaciones torreon, mineria en la laguna, capital extranjero torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DesarrolloDeLaAperturaComercialEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Doing Business', 'Competitividad', 'Empresa');
        $this->fuentes                    = array('RNIE');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DesarrolloDeLaAperturaComercialEnLaLaguna

?>
