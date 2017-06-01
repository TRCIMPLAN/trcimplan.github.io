<?php
/**
 * TrcIMPLAN Sitio Web - Viviendas con Computadora
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

namespace SMIGeorreferenciados;

/**
 * Clase ViviendasConComputadora
 */
class ViviendasConComputadora extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre        = 'Viviendas con Computadora';
        $this->autor         = 'Arq. Jair Miramontes Chávez';
        $this->fecha         = '2015-04-13T08:10';
        // El nombre del archivo a crear
        $this->archivo       = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        $this->imagen        = '../sig-mapas-torreon/viviendas-con-computadora/imagen.jpg';
        $this->imagen_previa = '../sig-mapas-torreon/viviendas-con-computadora/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Accesibilidad de las viviendas a contar con computadora.';
        $this->claves        = 'IMPLAN, Torreon, Computadora';
        // URL de destino
        $this->url           = '../indicadores-torreon/sociedad-viviendas-con-computadora.html';
        $this->url_etiqueta  = 'Ir al indicador';
        // Sin contenido
        $this->contenido     = '';
        // Sin JavaScript
        $this->javascript    = '';
        // Para redifusión
        $this->redifusion    = sprintf("<img src=\"%s\"><br>\n\n%s", $this->imagen, $this->descripcion);
    } // constructor

} // Clase ViviendasConComputadora

?>
