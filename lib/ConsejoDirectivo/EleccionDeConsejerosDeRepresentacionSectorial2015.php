<?php
/**
 * TrcIMPLAN - Elección de Consejeros de Representación Sectorial 2015
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
 * @package TrcIMPLAN
 */

namespace ConsejoDirectivo;

/**
 * Clase EleccionDeConsejerosDeRepresentacionSectorial2015
 */
class EleccionDeConsejerosDeRepresentacionSectorial2015 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Elección de Consejeros de Representación Sectorial 2015';
     // $this->autor           = 'Autor';
        $this->fecha           = '2015-12-17T14:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'eleccion-de-consejeros-de-representacion-sectorial-2015';
        $this->imagen          = 'eleccion-de-consejeros-de-representacion-sectorial-2015/imagen.jpg';
        $this->imagen_previa   = 'eleccion-de-consejeros-de-representacion-sectorial-2015/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Resultado del proceso de elección de los ciudadanos que van a formar parte del Consejo Directivo como Consejeros de Representación Sectorial en el IMPLAN Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Convocatoria, 2015, Consejo Directivo';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'consejo-directivo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Consejo Directivo';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir  = false;
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
        $this->poner_imagen_en_contenido = false;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/ConsejoDirectivo/EleccionDeConsejerosDeRepresentacionSectorial2015.md';
        // Para el Organizador
     // $this->categorias      = array();
     // $this->fuentes         = array();
     // $this->regiones        = array();
    } // constructor

} // Clase EleccionDeConsejerosDeRepresentacionSectorial2015

?>
