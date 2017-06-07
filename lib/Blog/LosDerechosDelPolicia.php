<?php
/**
 * TrcIMPLAN Sitio Web - Los Derechos del Policía
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
 * Clase LosDerechosDelPolicia
 */
class LosDerechosDelPolicia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Derechos del Policía';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2015-08-04T14:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'los-derechos-del-policia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las condiciones laborales del policía pueden ser un factor que obstaculice la buena marcha de la seguridad ciudadana.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LosDerechosDelPolicia.md';
        // Para el Organizador
        $this->categorias                 = array('Delincuencia', 'Seguridad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Coahuila', 'Durango', 'Nacional');
    } // constructor

} // Clase LosDerechosDelPolicia

?>
