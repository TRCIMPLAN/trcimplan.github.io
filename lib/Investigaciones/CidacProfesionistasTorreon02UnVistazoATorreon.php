<?php
/**
 * Sitio Web - CidacProfesionistasTorreon02UnVistazoATorreon
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
 * @package TrcIMPLANSitioWeb
 */

namespace Investigaciones;

/**
 * Clase CidacProfesionistasTorreon02UnVistazoATorreon
 */
class CidacProfesionistasTorreon02UnVistazoATorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Profesionistas Torreón - Un Vistazo a Torreón';
        $this->autor           = 'CIDAC';
        $this->fecha           = '2016-04-21T14:20';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'cidac-profesionistas-torreon-02-un-vistazo-a-torreon';
        $this->imagen          = 'cidac-profesionistas-torreon/imagen.png';
        $this->imagen_previa   = 'cidac-profesionistas-torreon/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La Zona Metropolitana de la Laguna y la ciudad de Torreón (son) consideradas dos de las localidades más atractivas para la inversión y desarrollo económico dentro del país..';
        $this->claves          = 'IMPLAN, Torreon';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'investigaciones';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Investigaciones';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'revisar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
        $this->poner_imagen_en_contenido = false;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->image_show     = $this->poner_imagen_en_contenido;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Investigaciones/CidacProfesionistasTorreon02UnVistazoATorreon.md';
        // Para el Organizador
        $this->categorias      = array('Bienestar', 'Educación', 'Empleo', 'Empresas');
        $this->fuentes         = array('Centro de Investigación para el Desarrollo, A.C. (CIDAC)');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CidacProfesionistasTorreon02UnVistazoATorreon

?>
