<?php
/**
 * TrcIMPLAN Sitio Web - VolverAlInicio
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
 * Clase VolverAlInicio
 */
class VolverAlInicio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Volver al inicio';
        $this->autor                      = 'Lic. Aldo Valdés';
        $this->fecha                      = '2021-08-04T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'volver-al-inicio-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El centro histórico de Torreón es el lugar más icónico de la ciudad. En él se pueden apreciar marcas de los principales acontecimientos que ha vivido la región desde finales del siglo XIX hasta la nuestra época.';
        $this->claves                     = 'IMPLAN, Torreon, centro, historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/VolverAlInicio.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase VolverAlInicio

?>
