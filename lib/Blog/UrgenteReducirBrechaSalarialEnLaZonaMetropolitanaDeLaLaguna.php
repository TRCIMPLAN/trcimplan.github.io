<?php
/**
 * TrcIMPLAN Sitio Web - UrgenteReducirBrechaSalarialEnLaZonaMetropolitanaDeLaLaguna
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
 * Clase UrgenteReducirBrechaSalarialEnLaZonaMetropolitanaDeLaLaguna
 */
class UrgenteReducirBrechaSalarialEnLaZonaMetropolitanaDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Urgente reducir brecha salarial en la Zona Metropolitana de La Laguna.';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2018-12-18T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'urgente-reducir-brecha-salarial-en-la-zona-metropolitana-de-la-laguna-dic2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Al tercer trimestre de 2018 el Coeficiente de Gini, el cual mide la igualdad en la distribución del ingreso, se ubicó en 0.397 en el área metropolitana de La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, AML. ingreso';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UrgenteReducirBrechaSalarialEnLaZonaMetropolitanaDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Competitividad');
        $this->fuentes                    = array('CONEVAL', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase UrgenteReducirBrechaSalarialEnLaZonaMetropolitanaDeLaLaguna

?>
