<?php
/**
 * TrcIMPLAN Sitio Web - LosDeterminantesSocialesDeLaSalud
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
 * Clase LosDeterminantesSocialesDeLaSalud
 */
class LosDeterminantesSocialesDeLaSalud extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Determinantes Sociales de la Salud';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2017-04-21T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-determinantes-sociales-de-la-salud';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Coahuila la Secretaría de Salud informa que en 2016 existían 905,816 personas sin derechohabiencia. En la jurisdicción no. 6 que comprende Torreón, Matamoros y Viesca del total de la población (838,443 habitantes), 239,625 habitantes viven sin derechoabiencia.';
        $this->claves                     = 'IMPLAN, Torreon, Salud, Determinantes, Sociales';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LosDeterminantesSocialesDeLaSalud.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Salud');
        $this->fuentes                    = array('INEGI', 'Organización Mundial de la Salud (OMS)');
        $this->regiones                   = array('Torreón', 'Matamoros', 'La Laguna', 'Coahuila');
    } // constructor

} // Clase LosDeterminantesSocialesDeLaSalud

?>
