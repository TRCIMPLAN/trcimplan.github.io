<?php
/**
 * TrcIMPLAN Sitio Web - Potencial Económico del Sector Salud en La Laguna
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
 * Clase PotencialEconomicoDelSectorSaludEnLaLaguna
 */
class PotencialEconomicoDelSectorSaludEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Potencial Económico del Sector Salud en La Laguna';
        $this->autor                      = array('Lic. Rodrigo González Morales', 'Lic. Alicia Valdez Ibarra', 'Lic. Luis A. Gutiérrez Arizpe');
        $this->fecha                      = '2015-09-17T15:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'potencial-economico-del-sector-salud-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la Zona Metropolitana de La Laguna el sector salud es una cadena de valor con un relevante potencial económico. Ello gracias a su tradición, sus recursos humanos, su infraestructura y su productividad.';
        $this->claves                     = 'IMPLAN, Torreon, Salud';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PotencialEconomicoDelSectorSaludEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Salud', 'Empresas');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase PotencialEconomicoDelSectorSaludEnLaLaguna

?>
