<?php
/**
 * TrcIMPLAN Sitio Web - AbusoYMaltratoContraNinosYNinas
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
 * Clase AbusoYMaltratoContraNinosYNinas
 */
class AbusoYMaltratoContraNinosYNinas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Abuso sexual contra niños, niñas y adolescentes en Coahuila.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-04-26T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'abuso-y-maltrato-contra-ninos-y-ninas-abr-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Unidad Especializada en Delitos Sexuales contra Niñas, Niños y Adolescentes registró de enero a julio del 2020 un total de 142 delitos, de ellos más del 50 por ciento (81), corresponden al delito de abuso sexual a menores de 15 años.';
        $this->claves                     = 'IMPLAN, Torreon, delitos, sexuales, niños, niñas, adolescentes, abuso, menores';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AbusoYMaltratoContraNinosYNinas.md';
        // Para el Organizador
        $this->categorias                 = array('Población','Delincuencia');
        $this->fuentes                    = array('Inegi','Unicef');
        $this->regiones                   = array('Torreón', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AbusoYMaltratoContraNinosYNinas

?>
