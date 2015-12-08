<?php
/**
 * TrcIMPLAN Sitio Web - IMPLAN Torreón impulsa la creación del Plan de Movilidad no Motorizada
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
 * Clase PlanEstrategicoMetropolitanoMovilidadNoMotorizada
 */
class PlanEstrategicoMetropolitanoMovilidadNoMotorizada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'IMPLAN Torreón impulsa la creación del Plan de Movilidad no Motorizada';
     // $this->autor           = 'Autor';
        $this->fecha           = '2015-08-13T14:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = '2015-08-13-plan-estrategico-metropolitano-movilidad-no-motorizada';
        $this->imagen          = '2015-08-13-plan-estrategico-metropolitano-movilidad-no-motorizada/imagen.jpg';
        $this->imagen_previa   = '2015-08-13-plan-estrategico-metropolitano-movilidad-no-motorizada/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Integrantes de colectivos ciclistas, autoridades municipales, ciudadanos y profesionistas especializados en el tema se reunirán para elaborar una visión, objetivos, metas y estrategias a mediano y largo plazo que conduzcan a elevar la calidad de vida de los peatones y ciclistas en nuestra región.';
        $this->claves          = 'IMPLAN, Torreon, Movilidad, No Motorizada, Ciclistas, Peatones, Vialidad';
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
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/PlanEstrategicoMetropolitanoMovilidadNoMotorizada.md';
        // Para el Organizador
        $this->categorias      = array('Movilidad', 'Participación Ciudadana', 'Vialidad');
        $this->fuentes         = array('Ayuntamiento de Torreón', 'IMPLAN');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PlanEstrategicoMetropolitanoMovilidadNoMotorizada

?>
