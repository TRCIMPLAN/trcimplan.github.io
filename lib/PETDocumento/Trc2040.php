<?php
/*
 * TrcIMPLAN - Trc2040
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 */

namespace PETDocumento;

/**
 * Clase Trc2040
 */
class Trc2040 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Plan Estratégico Torreón con Enfoque Metropolitano 2040';
        $this->fecha            = '2016-10-06T16:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        $this->imagen           = 'trc2040/imagen.jpg';
        $this->imagen_previa    = 'trc2040/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Documento descargable.';
        $this->claves           = 'IMPLAN, Torreon, Plan Estrategico Torreon 2040';
        // El estado puede ser 'publicar' (lo usa), 'revisar' o 'ignorar' (lo omite)
        $this->estado           = 'publicar';
        // URL de destino
        $this->url              = 'trc2040.pdf';
        $this->url_etiqueta     = 'Descargar PDF 4.6 MB';
        // Sin contenido
        $this->contenido        = '';
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, si tiene una imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = sprintf("<img src=\"%s\"><br>\n\n%s", $this->imagen, $this->descripcion);
        } else {
            $this->redifusion   = $this->descripcion;
        }
    } // constructor

} // Clase Trc2040

?>
