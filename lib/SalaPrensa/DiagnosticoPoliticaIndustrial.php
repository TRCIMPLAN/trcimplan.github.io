<?php
/**
 * Sitio Web - DiagnosticoPoliticaIndustrial
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
 * Clase DiagnosticoPoliticaIndustrial
 */
class DiagnosticoPoliticaIndustrial extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Implan desarrollará Diagnóstico de Política Industrial';
    //  $this->autor           = 'Autor';
        $this->fecha           = '2016-04-13T13:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = '2016-04-13-diagnostico-politica-industrial';
        $this->imagen          = '2016-04-13-diagnostico-politica-industrial/imagen.jpg';
        $this->imagen_previa   = '2016-04-13-diagnostico-politica-industrial/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Alicia Valdez Ibarra, encargada de indicadores económicos del IMPLAN, dio a conocer ante el Cabildo de Torreón el avance de este proyecto, que consiste en su primera etapa en la elaboración de un diagnóstico para conocer las características de cada industria.';
        $this->claves          = 'IMPLAN, Torreon, Diagnostico, Politica, Industrial';
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
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/DiagnosticoPoliticaIndustrial.md';
        // Para el Organizador
        $this->categorias      = array('Gobierno');
        $this->fuentes         = array('IMPLAN');
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase DiagnosticoPoliticaIndustrial

?>
