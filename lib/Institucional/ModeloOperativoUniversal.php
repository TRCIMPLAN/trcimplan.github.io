<?php
/*
 * TrcIMPLAN Sitio Web - Institucional Modelo Operativo Universal
 *
 * Copyright (C) 2016 IMPLAN Torreón
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

namespace Institucional;

/**
 * Clase ModeloOperativoUniversal
 */
class ModeloOperativoUniversal extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Propuesta de Modelo Operativo Universal';
     // $this->autor            = '';
        $this->fecha            = '2016-08-19T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'modelo-operativo-universal';
        $this->imagen           = 'modelo-operativo-universal/imagen.jpg';
        $this->imagen_previa    = 'modelo-operativo-universal/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion      = 'Esta propuesta de IMPLAN se sustenta en la experiencia obtenida por los Institu­tos Municipales de Planea­ción -IMPLANES-,­­ actualmente­ en operación en más de 70 ciuda­des de la república mexicana.';
        $this->claves           = 'IMPLAN, Torreon, Modelo Operativo Universal';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'institucional';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Institucional > Modelo Operativo Univ.';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
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
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el archivo HTML seguido del archivo Markdown
        $this->contenido->articleBody =
            $this->cargar_archivo('lib/Institucional/ModeloOperativoUniversal.html').
            $this->cargar_archivo_markdown_extra('lib/Institucional/ModeloOperativoUniversal.md');
        // Ejecutar este método en el padre
        return parent::html();
    } // html


    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // Cargar archivo externo
        $this->javascript = $this->cargar_archivo('lib/Institucional/ModeloOperativoUniversal.js');
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
        $this->redifusion = $this->cargar_archivo_markdown_extra('lib/Institucional/ModeloOperativoUniversal.md');
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase ModeloOperativoUniversal

?>
