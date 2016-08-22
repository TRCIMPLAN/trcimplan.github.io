<?php
/**
 * TrcIMPLAN - Aire Para Todos
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
 * @package TrcIMPLAN
 */

namespace Proyectos;

/**
 * Clase AireParaTodos
 */
class AireParaTodos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Aire Para Todos';
        $this->autor           = 'Dirección de Proyectos Estratégicos';
        $this->fecha           = '2016-08-18T11:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'aire-para-todos';
        $this->imagen          = 'aire-para-todos/imagen.jpg';
        $this->imagen_previa   = 'aire-para-todos/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Taller sobre el Bosque Venustiano Carranza. Presentaciones sobre la Historia, Entorno Sociourbano y Medio Ambiente del BVC.';
        $this->claves          = 'IMPLAN, Torreon, Areas Verdes, Sustentabilidad, Bosque';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'proyectos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Proyectos Estratégicos > Todos los Proyectos';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
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
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html = 'lib/Proyectos/AireParaTodos.html';
        // Para el Organizador
        $this->categorias      = array('Bienestar', 'Participación Ciudadana', 'Recursos Naturales');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón');
    } // constructor

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // Cargar archivo externo
        $this->javascript = $this->cargar_archivo('lib/Proyectos/AireParaTodos.js');
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Contenido especial para redifusión
        $this->redifusion = <<<FINAL
<!-- Mostrar la primer imagen de la presentación como vínculo a la página -->
<a href="{$this->archivo}.html"><img src="aire-para-todos/aire-para-todos-00.jpg"></a>
<p>{$this->descripcion}</p>

FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase AireParaTodos

?>
