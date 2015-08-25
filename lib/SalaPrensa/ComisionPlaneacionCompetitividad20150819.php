<?php
/**
 * TrcIMPLAN - Sala Prensa Comision Planeacion Competitividad 20150819
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

namespace SalaPrensa;

/**
 * Clase ComisionPlaneacionCompetitividad20150819
 */
class ComisionPlaneacionCompetitividad20150819 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Sesión de la Comisión de Planeación y Competitividad';
     // $this->autor           = 'Autor';
        $this->fecha           = '2015-08-19T11:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = '2015-08-19-comision-planeacion-competitividad';
        $this->imagen          = '2015-08-19-comision-planeacion-competitividad/imagen.jpg';
        $this->imagen_previa   = '2015-08-19-comision-planeacion-competitividad/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El pasado 19 de agosto de 2015 se llevó a cabo la Sesión de la Comisión de Planeación y Competitividad.';
        $this->claves          = 'IMPLAN, Torreon, Comision, Planeacion';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'sala-prensa';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Sala de Prensa';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
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
        // El contenido es una instancia de SchemaSalaPrensaPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html = 'lib/SalaPrensa/ComisionPlaneacionCompetitividad20150819.html';
        // Para el Organizador
        $this->categorias      = array('Gobierno');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase ComisionPlaneacionCompetitividad20150819

?>