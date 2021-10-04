<?php
/**
 * TrcIMPLAN Sitio Web - DiaMundialDelHabitat
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
 * Clase DiaMundialDelHabitat
 */
class DiaMundialDelHabitat extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Día Mundial del Hábitat: Un mundo libre de carbono.';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2021-10-04T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'dia-mundial-del-habitat-oct-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cada año, el 1ero de Octubre se conmemora el Día Mundial del Hábitat, fecha establecida por las Naciones Unidas en 1985, con el fin de reflexionar acerca del estado y los aspectos a mejorar de nuestros poblados, tanto rurales como urbanos.';
        $this->claves                     = 'IMPLAN, Torreon, habitat, carbono';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DiaMundialDelHabitat.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('ONU-HABITAT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DiaMundialDelHabitat

?>
