<?php
/**
 * TrcIMPLAN - SMI Datos Abiertos (Creado por Central:SmiLanzadera)
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

namespace SMI;

/**
 * Clase DatosAbiertos
 */
class DatosAbiertos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Datos Abiertos del Sistema Metropolitano de Indicadores';
        $this->autor           = 'Dirección de Investigación Estratégica';
        $this->fecha           = '2015-11-08T23:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'datos-abiertos';
        $this->imagen          = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa   = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Descargar los datos abiertos del Sistema Metropolitano de Indicadores.';
        $this->claves          = 'IMPLAN, Torreon, Datos Abiertos, Indicadores';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'smi';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Indicadores > Datos Abiertos';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión
        $this->poner_imagen_en_contenido = false;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaArticle();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaArticle
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/SMI/DatosAbiertos.md';
        // Para el Organizador
        $this->categorias      = array('Gobierno Digital', 'Transparencia');
        $this->fuentes         = array('IMPLAN');
        $this->regiones        = array();
    } // constructor

} // Clase DatosAbiertos

?>
