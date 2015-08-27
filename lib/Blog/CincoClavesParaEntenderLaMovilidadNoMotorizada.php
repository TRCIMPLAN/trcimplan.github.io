<?php
/**
 * TrcIMPLAN - MODULO CincoClavesParaEntenderLaMovilidadNoMotorizada
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

namespace Blog;

/**
 * Clase CincoClavesParaEntenderLaMovilidadNoMotorizada
 */
class CincoClavesParaEntenderLaMovilidadNoMotorizada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Cinco Claves para entender la Movilidad No Motorizada';
        $this->autor           = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha           = '2015-08-27T14:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'cinco-claves-para-entender-la-movilidad-no-motorizada';
        $this->imagen          = 'cinco-claves-para-entender-la-movilidad-no-motorizada/imagen.jpg';
        $this->imagen_previa   = 'cinco-claves-para-entender-la-movilidad-no-motorizada/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Los resultados del taller para ubicar los esfuerzos y principios que tienen que realizarse para poder implementar un sistema de movilidad no motorizada.';
        $this->claves          = 'IMPLAN, Torreon, Movilidad, No Motorizada, Ciclistas, Peatones, Vehiculos, Transporte, Calles';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
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
        $this->contenido_archivo_markdown = 'lib/Blog/CincoClavesParaEntenderLaMovilidadNoMotorizada.md';
        // Para el Organizador
        $this->categorias      = array('Infraestructura', 'Movilidad');
        $this->fuentes         = array('IMPLAN', 'Logit');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CincoClavesParaEntenderLaMovilidadNoMotorizada

?>
