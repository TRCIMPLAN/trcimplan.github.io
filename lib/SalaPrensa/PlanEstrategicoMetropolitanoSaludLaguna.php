<?php
/**
 * TrcIMPLAN Sitio Web - IMPLAN organiza taller para fortalecer el Clúster Salud en La Laguna
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
 * Clase PlanEstrategicoMetropolitanoSaludLaguna
 */
class PlanEstrategicoMetropolitanoSaludLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'IMPLAN organiza taller para fortalecer el Clúster Salud en La Laguna';
     // $this->autor           = 'Autor';
        $this->fecha           = '2015-08-14T14:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = '2015-08-14-plan-estrategico-metropolitano-salud-laguna';
        $this->imagen          = '2015-08-14-plan-estrategico-metropolitano-salud-laguna/imagen.jpg';
        $this->imagen_previa   = '2015-08-14-plan-estrategico-metropolitano-salud-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Se ha convocado a hospitales y clínicas públicas y privadas, colegios, asociaciones e institutos de investigación médica, técnicos del área de salud, universidades con carreras en el área de salud, instituciones públicas del sector salud y proveedores de servicios e insumos médicos.';
        $this->claves          = 'IMPLAN, Torreon, Salud, Laguna, Medicos, Hospitales, Clinicas, Investigacion';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'sala-prensa';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Comunicados > Sala de Prensa';
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
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/PlanEstrategicoMetropolitanoSaludLaguna.md';
        // Para el Organizador
        $this->categorias      = array('Participación Ciudadana', 'Salud');
        $this->fuentes         = array('IMPLAN', 'IMSS Subdelegación Torreón');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PlanEstrategicoMetropolitanoSaludLaguna

?>
