<?php
/**
 * TrcIMPLAN Sitio Web - Indicadores Georreferenciados
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

namespace SMI;

/**
 * Clase SMIGeorreferenciados
 */
class SMIGeorreferenciados extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre        = 'Indicadores Georreferenciados';
        $this->autor         = 'Dirección de Investigación Estratégica';
        $this->fecha         = '2015-01-01T08:00';
        // El nombre del archivo a crear
        $this->archivo       = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        $this->imagen        = 'introduccion/imagen.jpg';
        $this->imagen_previa = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion   = 'Indicadores que tienen mapas con información georreferenciada.';
        $this->claves        = 'IMPLAN, Torreon, Indicadores, Mapas, Georreferenciados';
        // URL de destino
        $this->url           = '../smi-georreferenciados/index.html';
    //~ $this->url_etiqueta  = '';
        // Sin contenido
        $this->contenido     = '';
        // Sin JavaScript
        $this->javascript    = '';
        // Para redifusión
        $this->redifusion    = sprintf("<img src=\"%s\"><br>\n\n%s", $this->imagen, $this->descripcion);
    } // constructor

} // Clase SMIGeorreferenciados

?>
