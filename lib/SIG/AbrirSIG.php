<?php
/*
 * TrcIMPLAN Sitio Web - Instrucciones para abrir el Sistema de Información Geográfica
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
 * Clase AbrirSIG
 *
 * Ha sido descontinuada del menú de navegación. Se crea el archivo con estatus revisar sólo para recibir visitantes con el URL antiguo.
 */
class AbrirSIG extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre         = 'Abrir el S.I.G.';
     // $this->autor          = 'Autor';
        $this->fecha          = '2014-07-01';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo        = 'abrir-sig';
        $this->imagen         = 'introduccion/imagen.jpg';
        $this->imagen_previa  = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion    = 'Instrucciones para abrir el Sistema de Información Geográfica.';
        $this->claves         = 'IMPLAN, Torreon';
        $this->categorias     = array();
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio     = 'sig';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu    = 'Información Geográfica';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado         = 'revisar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir = false;
        // El contenido
        $this->contenido      = <<<FINAL
<img class="img-responsive" src="abrir-sig/sig-instrucciones-1.png">
<img class="img-responsive" src="abrir-sig/sig-instrucciones-2.jpg">
<img class="img-responsive" src="abrir-sig/sig-instrucciones-3.jpg">
<a href="http://201.159.104.45:8080/apps/implan2.html" target="_blank"><img class="img-responsive" src="abrir-sig/sig-instrucciones-4.jpg"></a>
FINAL;
        // Sin JavaScript
        $this->javascript     = '';
        // Para redifusión, si tiene una imagen se usa y después la descripción
        if ($this->imagen != '') {
            $this->redifusion = sprintf("<a href=\"%s\"><img src=\"%s\"><br>\n\n%s</a>", "{$this->directorio}/{$this->archivo}.html", $this->imagen, $this->descripcion);
        } else {
            $this->redifusion = sprintf('<a href="%s">%s</a>', "{$this->directorio}/{$this->archivo}.html", $this->descripcion);
        }
    } // constructor

} // Clase AbrirSIG

?>
