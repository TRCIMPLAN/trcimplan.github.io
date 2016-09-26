<?php
/*
 * TrcIMPLAN Sitio Web - Publicación
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
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

namespace Base;

/**
 * Clase PublicacionSchemaArticle
 *
 * Para compatibilidad con la versión en desarrollo. Pero no valida directorio, imagen o imagen_previa
 */
class PublicacionSchemaArticle extends Publicacion {

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
        // Validar descripcion
        if (!is_string($this->descripcion) || ($this->descripcion == '')) {
            throw new \Exception("Error en PublicacionSchemaBlogPosting, validar: La propiedad descripcion no está definida.");
        }
        // Validar autor
        if (!(is_string($this->autor) && ($this->autor != '')) && !(is_array($this->autor) && (count($this->autor) > 0))) {
            throw new \Exception("Error en PublicacionSchemaBlogPosting, validar: La propiedad autor no está definida.");
        }
        // El contenido es estructurado en un esquema SchemaArticle
        $schema                = new SchemaArticle();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        if (is_array($this->contenido) && (count($this->contenido) > 0)) {
            $schema->articleBody = implode("\n", $this->contenido);
        }
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
    } // validar

} // Clase PublicacionSchemaArticle

?>
