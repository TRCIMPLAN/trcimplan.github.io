<?php
/**
 * TrcIMPLAN - DESCRIPCION
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

namespace Proyectos;

/**
 * Clase SaludLaguna
 */
class SaludLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Salud Laguna';
        $this->autor           = 'Dirección de Proyectos Estratégicos';
        $this->fecha           = '2015-05-25T11:40';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo         = 'salud-laguna';
        $this->imagen          = 'salud-laguna/imagen.jpg';
        $this->imagen_previa   = 'salud-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion     = 'Salud Laguna es una agrupación interactiva de pro­fesionales, instituciones, or­ga­nizaciones, integrados en torno a las actividades económicas que dan servicio y soportan al sec­tor salud.';
        $this->claves          = 'IMPLAN, Torreon';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'proyectos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Proyectos Estratégicos > Salud Laguna';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir  = true;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaArticle();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = true;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaArticle
        $this->contenido       = $schema;
        // Para el Organizador
        $this->categorias      = array('Empresas', 'Salud');
        $this->fuentes         = array('IMPLAN');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el archivo markdown y convertirlo a HTML
        $this->contenido->articleBody = $this->cargar_archivo_markdown_extra('lib/Proyectos/SaludLaguna.md');
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Cargar el archivo markdown y convertirlo a HTML
        $markdown = $this->cargar_archivo_markdown_extra('lib/Proyectos/SaludLaguna.md');
        // Si tiene la imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion = "<img src=\"{$this->imagen}\"><br>\n\n{$markdown}";
        } else {
            $this->redifusion = $markdown;
        }
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SaludLaguna

?>
