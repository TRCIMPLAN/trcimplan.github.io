<?php
/**
 * TrcIMPLAN Sitio Web - MigracionEnMasa
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
 * Clase MigracionEnMasa
 */
class MigracionEnMasa extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Aumenta Fenómeno de Caravanas Migrantes';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2021-10-08T14:33';
        // El nombre del archivo a crear
        $this->archivo                    = 'migracion-en-masa-oct-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Coahuila, en lo que va del año, se registraron 7,616 eventos, sumatoria que representa a los 711 presentados en Acuña, 553 de Monclova, 4,411 de Piedras Negras, 684 de Saltillo y 257 de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, migracion, migrantes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MigracionEnMasa.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MigracionEnMasa

?>
