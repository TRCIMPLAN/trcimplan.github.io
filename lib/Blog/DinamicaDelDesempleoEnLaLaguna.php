<?php
/**
 * TrcIMPLAN Sitio Web - DinamicaDelDesempleoEnLaLaguna
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
 * Clase DinamicaDelDesempleoEnLaLaguna
 */
class DinamicaDelDesempleoEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Dinámica del Desempleo en La Laguna';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2019-12-19T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'dinamica-del-desempleo-en-la-laguna-dic2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“El desempleo en La Laguna sigue siendo tema de preocupación:  Al tercer trimestre de 2019, los jóvenes representan el 56.20% de la población desocupada y presentan una tasa de desempleo del 9.17%; mientras que, para el total de la Zona Metropolitana de La Laguna, esta cifra se encuentra en un 4.81%.”';
        $this->claves                     = 'IMPLAN, Torreon, empleo, desempleo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DinamicaDelDesempleoEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DinamicaDelDesempleoEnLaLaguna

?>
