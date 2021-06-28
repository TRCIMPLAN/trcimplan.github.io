<?php
/**
 * TrcIMPLAN Sitio Web - ImportanciaAgricolaYGanaderaDeLaLaguna
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
 * Clase ImportanciaAgricolaYGanaderaDeLaLaguna
 */
class ImportanciaAgricolaYGanaderaDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Importancia Agrícola y Ganadera de La Laguna';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2021-06-28T12:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'importancia-agricola-y-ganadera-de-la-laguna-jun-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Distrito Laguna tuvo un promedio anual de 2011 al 2020 de 58,126.46 toneladas de ganado en pie; 115,274.42 toneladas de ave en pie; 124,440.25 toneladas de carne en canal y 1,361,472.53 (en miles de litros) de leche de ganado bovino y caprino. Ningún distrito en el resto de Coahuila alcanza a disputar la primacía del Distrito Laguna Coahuila en este ámbito (Servicio de Información Agroalimentaria y Pesquera, s.f.).';
        $this->claves                     = 'IMPLAN, Torreon, ganado, carne, agroalimentario, pesquero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImportanciaAgricolaYGanaderaDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ImportanciaAgricolaYGanaderaDeLaLaguna

?>
