<?php
/*
 * TrcIMPLAN - La necesidad de contar con mejores Ciclociudades
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
namespace Blog;

/**
 * Clase LaNecesidadDeContarConMejoresCiclociudades
 */
class LaNecesidadDeContarConMejoresCiclociudades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La necesidad de contar con mejores Ciclociudades';
        $this->autor           = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha           = '2016-05-18T16:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-necesidad-de-contar-con-mejores-ciclociudades';
        $this->imagen          = 'la-necesidad-de-contar-con-mejores-ciclociudades/imagen.jpg';
        $this->imagen_previa   = 'la-necesidad-de-contar-con-mejores-ciclociudades/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'En el 2015 La Laguna se posicionó en el lugar 7 de 30 entidades evaluadas en el ranking de ciclociudades, sin embargo su infraestructura ciclista aún es escasa. Se calcula que sólo 2% de los viajes se realizan en bicicleta.';
        $this->claves          = 'IMPLAN, Torreon, Transporte, Bicicleta';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
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
        $this->contenido_archivo_markdown = 'lib/Blog/LaNecesidadDeContarConMejoresCiclociudades.md';
        // Para el Organizador
        $this->categorias      = array('Movilidad');
        $this->fuentes         = array('Instituto de Políticas para el Transporte y el Desarrollo (ITDP)');
        $this->regiones        = array('Nacional');
    } // constructor

} // Clase LaNecesidadDeContarConMejoresCiclociudades

?>
