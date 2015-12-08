<?php
/**
 * TrcIMPLAN Sitio Web - Conoce a los Consejeros del IMPLAN 2014-2015
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
 * @package TrcIMPLANSitioWeb
 */

namespace SalaPrensa;

/**
 * Clase ConoceALosConsejerosDelIMPLAN20142015
 */
class ConoceALosConsejerosDelIMPLAN20142015 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Conoce a los Consejeros del IMPLAN 2014-2015';
        $this->autor           = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha           = '2015-12-07T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = '2015-12-07-conoce-a-los-consejeros-del-implan-2014-2015';
        $this->imagen          = '2015-12-07-conoce-a-los-consejeros-del-implan-2014-2015/imagen.jpg';
        $this->imagen_previa   = '2015-12-07-conoce-a-los-consejeros-del-implan-2014-2015/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El 75% del Consejo Directivo del Instituto Municipal de Planeación es ciudadano. Se presenta un perfil de los miembros de la sociedad que participan de forma activa en el Organismo.';
        $this->claves          = 'IMPLAN, Torreon, Consejeros, Sociedad, Ciudadano';
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
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ConoceALosConsejerosDelIMPLAN20142015.md';
        // Para el Organizador
        $this->categorias      = array('Gobierno');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase ConoceALosConsejerosDelIMPLAN20142015

?>
