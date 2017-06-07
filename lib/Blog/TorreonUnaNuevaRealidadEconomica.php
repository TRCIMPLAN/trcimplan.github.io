<?php
/**
 * TrcIMPLAN Sitio Web - Torreon Una Nueva Realidad Economica
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
 * Clase TorreonUnaNuevaRealidadEconomica
 */
class TorreonUnaNuevaRealidadEconomica extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón: Una Nueva Realidad Económica';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2015-09-01T09:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-una-nueva-realidad-economica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La apertura de negocios, la baja inflación y una disminución en la tasa de informalidad caracterizan al segundo trimestre en el municipio de Torreón, de acuerdo con el Balance Económico Local.';
        $this->claves                     = 'IMPLAN, Torreon, Apertura, Negocios, Empresas, Informalidad, Desempleo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonUnaNuevaRealidadEconomica.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Empleo', 'Empresas');
        $this->fuentes                    = array('INEGI', 'IMSS Subdelegación Torreón', 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
        $this->regiones                   = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase TorreonUnaNuevaRealidadEconomica

?>
