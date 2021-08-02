<?php
/**
 * TrcIMPLAN Sitio Web - ParquesDeBolsillo
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
 * Clase ParquesDeBolsillo
 */
class ParquesDeBolsillo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Parques de bolsillo como una estrategia para incrementar el espacio público';
        $this->autor                      = 'Arq. Olga Daniela Sánchez Valles';
        $this->fecha                      = '2021-08-02T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'parques-de-bolsillo-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se ha demostrado que las intervenciones realizadas a nivel de calle están asociadas con el aumento de la actividad física de la población, ya que generan entornos seguros y agradables, diversifican los usos de las calles y propician nuevos espacios de convivencia para los transeúntes.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ParquesDeBolsillo.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Medio Ambiente', 'Movilidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ParquesDeBolsillo

?>
