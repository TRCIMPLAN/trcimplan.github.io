<?php
/**
 * TrcIMPLAN Sitio Web - Maternidad Adolescente
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
 * Clase MaternidadAdolescente
 */
class MaternidadAdolescente extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre        = 'Maternidad Adolescente';
        $this->fecha         = '2015-04-13T08:10';
        // El nombre del archivo a crear
        $this->archivo       = ''; // No hay archivo HTML a crear, porque es un vínculo
        $this->imagen        = '../sig-mapas-torreon/maternidad-adolescente/imagen.jpg';
        $this->imagen_previa = '../sig-mapas-torreon/maternidad-adolescente/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Incidencia de Maternidad Adolescente.';
        $this->claves        = 'IMPLAN, Torreon, Maternidad, Adolescente';
        // URL de destino
        $this->url           = '../indicadores-torreon/sociedad-maternidad-adolescente.html';
        $this->url_etiqueta  = 'Ir al indicador';
        // Sin contenido
        $this->contenido     = '';
        // Sin JavaScript
        $this->javascript    = '';
        // Para redifusión
        $this->redifusion    = sprintf("<img src=\"%s\"><br>\n\n%s", $this->imagen, $this->descripcion);
    } // constructor

} // Clase MaternidadAdolescente

?>
