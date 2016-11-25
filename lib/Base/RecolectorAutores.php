<?php
/**
 * Plataforma de Conocimiento - Recolector Autores
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
 * Clase RecolectorAutores
 *
 * Recolecta las publicaciones separándolas por autores
 */
class RecolectorAutores extends Recolector {

    // const LIB_DIR;
    // protected $publicaciones;
    protected $publicaciones_todas; // Cada vez que se filtra, la propiedad publicaciones se afecta, así que guardamos todas aquí

    /**
     * Obtener autores
     *
     * @return array Arreglo con los autores encontrados
     */
    public function obtener_autores() {
        // Respaldar todas las publicaciones si no se ha hecho
        if (is_null($this->publicaciones_todas)) {
            $this->publicaciones_todas = $this->publicaciones;
        }
        // Inicializar arreglo donde acumularemos los autores
        $a = array();
        // Bucle por las publicaciones
        foreach ($this->publicaciones_todas as $publicacion) {
            // La propiedad autores puede ser un arreglo o un texto
            if (is_array($publicacion->autor) && (count($publicacion->autor) > 0)) {
                $autores = $publicacion->autor;
            } elseif (is_string($publicacion->autor) && ($publicacion->autor != '')) {
                $autores = array($publicacion->autor);
            } else {
                continue;
            }
            // Bucle por los autores de la publicación
            foreach ($autores as $autor) {
                if (!in_array($autor, $a)) {
                    $a[] = $autor;
                }
            }
        }
        // Si no se encontraron autores
        if (count($a) == 0) {
            throw new RecolectorExceptionVacio("Error en RecolectorAutores: No se encontraron autores.");
        }
        // Ordenar alfabéticamente
        sort($a, SORT_STRING);
        // Entregar
        return $a;
    } // obtener_autores

    /**
     * Filtrar publicaciones de un autor
     *
     * @param  string  Texto, autor a obtener
     * @param  integer Opcional, entero cantidad límite
     * @return array   Arreglo con instancias de publicaciones
     */
    public function filtrar_publicaciones_de_autor($autor, $limite=null) {
        // Validar
        if (!is_string($autor) || ($autor == '')) {
            throw new \Exception("Error en RecolectorAutores: El autor dado para obtener publicaciones es incorrecto.");
        }
        // Respaldar todas las publicaciones si no se ha hecho
        if (is_null($this->publicaciones_todas)) {
            $this->publicaciones_todas = $this->publicaciones;
        }
        // Bucle por las publicaciones
        $a = array();
        foreach ($this->publicaciones_todas as $publicacion) {
            // La propiedad autores puede ser un arreglo o un texto
            if (is_array($publicacion->autor) && (count($publicacion->autor) > 0)) {
                $autores = $publicacion->autor;
            } elseif (is_string($publicacion->autor) && ($publicacion->autor != '')) {
                $autores = array($publicacion->autor);
            } else {
                continue;
            }
            // Si el autor está presente en esta publicación
            if (in_array($autor, $autores)) {
                $a[] = $publicacion;
            }
        }
        // Si no se encontró ninguna publicación
        if (count($a) == 0) {
            throw new RecolectorExceptionVacio("Aviso en RecolectorAutores: No se encontraron publicaciones con el autor $autor.");
        }
        // Redefinir la propiedad publicaciones
        if (is_int($limite) && ($limite > 0)) {
            $this->publicaciones = array_slice($a, 0, $limite, true);
        } else {
            $this->publicaciones = $a;
        }
    } // filtrar_publicaciones_de_autor

    /**
     * Quitar filtro
     */
    public function quitar_filtro() {
        if (!is_null($this->publicaciones_todas)) {
            $this->publicaciones = $this->publicaciones_todas;
        }
    } // quitar_filtro

} // Clase RecolectorAutores

?>
