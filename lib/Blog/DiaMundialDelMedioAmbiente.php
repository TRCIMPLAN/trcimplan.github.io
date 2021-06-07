<?php
/**
 * TrcIMPLAN Sitio Web - DiaMundialDelMedioAmbiente
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
 * Clase DiaMundialDelMedioAmbiente
 */
class DiaMundialDelMedioAmbiente extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Día mundial del medio ambiente: de internacional a local';
        $this->autor                      = 'Lic. Pedro Eleazar González Valdez';
        $this->fecha                      = '2021-06-07T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'dia-mundial-del-medio-ambiente-jun-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón, para el 2019 la concentración de partículas menores a 10 micras se ubicó en 62.09 ug/m3 en promedio, por debajo del valor recomendado de 75 ug/m3 (Dirección general de Medio Ambiente de Torreón); y el Instituto Mexicano para la Competitividad (IMCO) posicionó a Coahuila como el 7º. lugar en tema de medio ambiente.';
        $this->claves                     = 'IMPLAN, Torreon, medio ambiente, ambiente, contaminacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DiaMundialDelMedioAmbiente.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DiaMundialDelMedioAmbiente

?>
