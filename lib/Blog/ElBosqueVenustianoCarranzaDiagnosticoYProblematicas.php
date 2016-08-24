<?php
/**
 * Sitio Web - El Bosque Venustiano Carranza: diagnóstico y problemáticas
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

namespace Blog;

/**
 * Clase ElBosqueVenustianoCarranzaDiagnosticoYProblematicas
 */
class ElBosqueVenustianoCarranzaDiagnosticoYProblematicas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'El Bosque Venustiano Carranza: diagnóstico y problemáticas';
        $this->autor           = 'Lic. Adriana Vargas Flores';
        $this->fecha           = '2016-08-24T14:20';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'el-bosque-venustiano-carranza-diagnostico-y-problematicas';
        $this->imagen          = 'el-bosque-venustiano-carranza-diagnostico-y-problematicas/imagen.jpg';
        $this->imagen_previa   = 'el-bosque-venustiano-carranza-diagnostico-y-problematicas/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El Bosque constituye el principal pulmón de la ciudad. En 1941, ya representaba el 5% de la mancha urbana. Dada su importancia como espacio público y ecológico el IMPLAN prepara una consulta ciudadana que refleje el sentir de la población sobre sus principales problemáticas.';
        $this->claves          = 'IMPLAN, Torreon, Bosque, Areas verdes, Sustentabilidad, Medio Ambiente';
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
        $this->contenido_archivo_markdown = 'lib/Blog/ElBosqueVenustianoCarranzaDiagnosticoYProblematicas.md';
        // Para el Organizador
        $this->categorias      = array('Recursos Naturales');
        $this->fuentes         = array('Dirección General de Medio Ambiente del Municipio de Torreón');
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase ElBosqueVenustianoCarranzaDiagnosticoYProblematicas

?>
