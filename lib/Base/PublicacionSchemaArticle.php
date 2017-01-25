<?php
/**
 * Plataforma de Conocimiento - PublicacionSchemaArticle
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase PublicacionSchemaArticle
 */
class PublicacionSchemaArticle extends Publicacion {

    // public $sitio_url;
    // public $fecha;
    // public $autor;
    // public $aparece_en_pagina_inicial;
    // public $para_compartir;
    // public $imagen;
    // public $imagen_previa;
    // public $icono;
    // public $region_nivel;
    // public $estado;
    // public $poner_imagen_en_contenido;
    // public $include_extra_directorio;
    // public $nombre;
    // public $nombre_menu;
    // public $directorio;
    // public $archivo;
    // public $descripcion;
    // public $claves;
    // public $encabezado;
    // public $encabezado_color;
    // public $url;
    // public $url_etiqueta;
    // public $en_raiz;
    // public $en_otro;
    // public $archivo_url;
    // public $archivo_target;
    // public $boton_url;
    // public $boton_target;
    // public $contenido_archivo_html;
    // public $contenido_archivo_markdown;
    // public $categorias;
    // public $fuentes;
    // public $regiones;
    // public $imprenta_titulo;
    // public $imprenta_nivel;
    // protected $contenido;
    // protected $javascript;
    // protected $redifusion;
    // protected $validado;

    /**
     * Validar
     *
     * Puede causar excepción si falta una propiedad obligatoria. También busca definir las opcionales.
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // Ejecutar método en el padre
        parent::validar();
        // Validar nombre
        if (!is_string($this->nombre) || ($this->nombre == '')) {
            throw new \Exception("Error en PublicacionSchemaBlogPosting, validar: La propiedad nombre no está definida.");
        }
        // Validar archivo
        if (!is_string($this->archivo) || ($this->archivo == '')) {
            throw new \Exception("Error en PublicacionSchemaBlogPosting, validar: La propiedad archivo no está definida.");
        }
        // Validar directorio
        if (!is_string($this->directorio) || ($this->directorio == '')) {
            throw new \Exception("Error en PublicacionSchemaBlogPosting, validar: La propiedad directorio no está definida.");
        }
        // Validar descripcion
        if (!is_string($this->descripcion) || ($this->descripcion == '')) {
            throw new \Exception("Error en PublicacionSchemaBlogPosting, validar: La propiedad descripcion no está definida.");
        }
        // Validar autor
        if (!(is_string($this->autor) && ($this->autor != '')) && !(is_array($this->autor) && (count($this->autor) > 0))) {
            throw new \Exception("Error en PublicacionSchemaBlogPosting, validar: La propiedad autor no está definida.");
        }
        // Si no está definida imagen
        if ($this->imagen == '') {
            // Si existe una imagen jpg
            if (file_exists("{$this->directorio}/{$this->archivo}/imagen.jpg")) {
                $this->imagen = "{$this->archivo}/imagen.jpg";
            }
            // Si existe una imagen png
            if (file_exists("{$this->directorio}/{$this->archivo}/imagen.png")) {
                $this->imagen = "{$this->archivo}/imagen.png";
            }
        }
        // Si no está definida imagen previa
        if ($this->imagen_previa == '') {
            // Si existe una imagen previa jpg
            if (file_exists("{$this->directorio}/{$this->archivo}/imagen-previa.jpg")) {
                $this->imagen_previa = "{$this->archivo}/imagen-previa.jpg";
            }
            // Si existe una imagen previapng
            if (file_exists("{$this->directorio}/{$this->archivo}/imagen-previa.png")) {
                $this->imagen_previa = "{$this->archivo}/imagen-previa.png";
            }
        }
        // El contenido es estructurado en un esquema SchemaArticle
        $schema                = new SchemaArticle();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
    //  $schema->articleBody   = ; // En el método html de Publicación será procesado
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
    } // validar

} // Clase PublicacionSchemaArticle

?>
