<?php
/*
 * TrcIMPLAN - Plan Integral de Movilidad Urbana Sustentable de La Laguna
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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

// Namespace
namespace SIGPlanes;

/**
 * Clase PlanIntegralMovilidadUrbanaSustentableLaLaguna
 */
class PlanIntegralMovilidadUrbanaSustentableLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Plan Integral de Movilidad Urbana Sustentable de La Laguna';
     // $this->autor            = '';
        $this->fecha            = '2015-03-01T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        $this->imagen           = 'estudio-plan-integral-movilidad-urbana-sustentable-laguna/imagen.png';
        $this->imagen_previa    = 'estudio-plan-integral-movilidad-urbana-sustentable-laguna/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Conjunto de acciones para implementar las distintas formas de transporte sustentable: a pie, bicicleta y transporte público.';
        $this->claves           = 'IMPLAN, Torreón, Plan, Movilidad, Urbana, Sustentable, La Laguna';
        $this->categorias       = array('Gobierno', 'Movilidad');
        // El estado puede ser 'publicar' (lo usa), 'revisar' o 'ignorar' (lo omite)
        $this->estado           = 'publicar';
        // URL de destino
        $this->url              = 'http://www.torreon.gob.mx/pdf/PIMUS_LAGUNA.pdf';
        $this->url_etiqueta     = 'Descargar PDF 33.7 MB';
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

} // Clase PlanIntegralMovilidadUrbanaSustentableLaLaguna

?>
