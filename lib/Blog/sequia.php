<?php
/**
 * TrcIMPLAN Sitio Web - sequia
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
 * Clase sequia
 */
class sequia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sequía, Una Ineficiente Gestión del Agua';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2021-05-17T11:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'sequia-may-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'México se encuentra nuevamente ante la dificultad de la ausencia de lluvias y el agotamiento en sus reservas de agua.';
        $this->claves                     = 'IMPLAN, Torreon, sequia, lluvias, agua, reservas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/sequia.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Recursos Naturales');
        $this->fuentes                    = array('cna');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase sequia

?>
