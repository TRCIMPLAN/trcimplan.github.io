<?php
/**
 * TrcIMPLAN Sitio Web - Libro de Proyectos 2016
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

namespace Institucional;

/**
 * Clase LibroDeProyectos2016
 */
class LibroDeProyectos2016 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre        = 'Libro de Proyectos 2016';
        $this->fecha         = '2016-03-08T12:40';
        // El nombre del archivo a crear
        $this->archivo       = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        $this->imagen        = 'libro-de-proyectos-2016/imagen.jpg';
        $this->imagen_previa = 'libro-de-proyectos-2016/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Datos generales de los proyectos propuestos por el IMPLAN Torreón para el año 2016.';
        $this->claves        = 'IMPLAN, Torreón';
        // URL de destino
        $this->url           = 'libro-de-proyectos-2016/libro-de-proyectos-2016.pdf';
        $this->url_etiqueta  = 'Descargar PDF 8.2 MB';
        // Sin contenido
        $this->contenido     = '';
        // Sin JavaScript
        $this->javascript    = '';
        // Para redifusión
        $this->redifusion    = sprintf("<img src=\"%s\"><br>\n\n%s", $this->imagen, $this->descripcion);
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado        = 'ignorar';
    } // constructor

} // Clase LibroDeProyectos2016

?>
