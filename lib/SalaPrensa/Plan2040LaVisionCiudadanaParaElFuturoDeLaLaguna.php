<?php
/**
 * Sitio Web -
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

namespace SalaPrensa;

/**
 * Clase Plan2040LaVisionCiudadanaParaElFuturoDeLaLaguna
 */
class Plan2040LaVisionCiudadanaParaElFuturoDeLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Plan 2040: La visión ciudadana para el futuro de la Laguna';
        $this->autor           = 'Lic. Adriana Vargas Flores';
        $this->fecha           = '2016-06-14T13:50';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'plan-2040-la-vision-ciudadana-para-el-futuro-de-la-laguna';
        $this->imagen          = 'plan-2040-la-vision-ciudadana-para-el-futuro-de-la-laguna/imagen.jpg';
        $this->imagen_previa   = 'plan-2040-la-vision-ciudadana-para-el-futuro-de-la-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Con una esencia fundamentalmente ciudadana, el Plan Estratégico Torreón con Visión Metropolitana reúne el diagnóstico, proyecciones y visión a futuro para nuestra ciudad y la Laguna en los próximos 25 años.';
        $this->claves          = 'IMPLAN, Torreon, Plan Torreon, Vision Metropolitana, Diagnostico, Proyecciones, Futuro';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'sala-prensa';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Sala de Prensa';
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
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/Plan2040LaVisionCiudadanaParaElFuturoDeLaLaguna.md';
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase Plan2040LaVisionCiudadanaParaElFuturoDeLaLaguna

?>
