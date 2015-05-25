<?php
/*
 * TrcIMPLAN Sitio Web - Zonificacion Primaria
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
namespace SIG;

/**
 * Clase ZonificacionPrimaria
 *
 * No crea archivo. Es para poner la opción en index.html
 */
class ZonificacionPrimaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre         = 'Zonificación Primaria';
        $this->autor          = 'Arq. Jair Miramontes Chávez';
        $this->fecha          = '2014-11-18T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo        = ''; // No hay archivo HTML a crear
        $this->imagen         = '../sig-mapas-torreon/zonificacion-primaria/imagen.jpg';
        $this->imagen_previa  = '../sig-mapas-torreon/zonificacion-primaria/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion    = 'Mapa para identificar el área urbana, el crecimiento urbano, la zona agrícola y las zonas de restauración y protección de Torreón, Coahuila.';
        $this->claves         = 'IMPLAN, Torreón, Zonificación, Usos de Suelo';
        $this->categorias     = array('Gobierno');
        // El estado puede ser 'publicar' (lo usa), 'revisar' o 'ignorar' (lo omite)
        $this->estado         = 'revisar';
        // URL de destino
        $this->url            = '../sig-mapas-torreon/zonificacion-primaria.html';
     // $this->url_etiqueta   = '';
        // Sin contenido
        $this->contenido      = '';
        // Sin JavaScript
        $this->javascript     = '';
        // Para redifusión, si tiene una imagen se usa y después la descripción
        if ($this->imagen != '') {
            $this->redifusion = sprintf("<a href=\"%s\"><img src=\"%s\"><br>\n\n%s</a>", $this->url, $this->imagen, $this->descripcion);
        } else {
            $this->redifusion = sprintf('<a href="%s">%s</a>', $this->url, $this->descripcion);
        }
    } // constructor

} // Clase ZonificacionPrimaria

?>
