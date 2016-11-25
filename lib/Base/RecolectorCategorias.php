<?php
/**
 * Plataforma de Conocimiento - Recolector Categorías
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
 * Clase RecolectorCategorias
 *
 * Recolecta las publicaciones separándolas por categorías
 */
class RecolectorCategorias extends Recolector {

    // const LIB_DIR;
    // protected $publicaciones;
    protected $publicaciones_todas; // Cada vez que se filtra, la propiedad publicaciones se afecta, así que guardamos todas aquí

    /**
     * Obtener categorias
     *
     * @return array Arreglo con las categorías encontradas
     */
    public function obtener_categorias() {
        // Respaldar todas las publicaciones si no se ha hecho
        if (is_null($this->publicaciones_todas)) {
            $this->publicaciones_todas = $this->publicaciones;
        }
        // Inicializar arreglo donde acumularemos las categorías
        $a = array();
        // Bucle por las publicaciones
        foreach ($this->publicaciones_todas as $publicacion) {
            // La propiedad categorias puede ser un arreglo o un texto
            if (is_array($publicacion->categorias) && (count($publicacion->categorias) > 0)) {
                $categorias = $publicacion->categorias;
            } elseif (is_string($publicacion->categorias) && ($publicacion->categorias != '')) {
                $categorias = array($publicacion->categorias);
            } else {
                continue;
            }
            // Bucle por las categorías de la publicación
            foreach ($categorias as $categoria) {
                if (!in_array($categoria, $a)) {
                    $a[] = $categoria;
                }
            }
        }
        // Si no se encontraron categorías
        if (count($a) == 0) {
            throw new RecolectorExceptionVacio("Error en RecolectorCategorias: No se encontraron categorías.");
        }
        // Ordenar alfabéticamente
        sort($a, SORT_STRING);
        // Entregar
        return $a;
    } // obtener_categorias

    /**
     * Filtrar publicaciones de una categoría
     *
     * @param  string  Texto, categoría a obtener
     * @param  integer Opcional, entero cantidad límite
     * @return array   Arreglo con instancias de publicaciones
     */
    public function filtrar_publicaciones_de_categoria($categoria, $limite=null) {
        // Validar
        if (!is_string($categoria) || ($categoria == '')) {
            throw new \Exception("Error en RecolectorCategorias: La categoría dada para obtener publicaciones es incorrecta.");
        }
        // Respaldar todas las publicaciones si no se ha hecho
        if (is_null($this->publicaciones_todas)) {
            $this->publicaciones_todas = $this->publicaciones;
        }
        // Bucle por las publicaciones
        $a = array();
        foreach ($this->publicaciones_todas as $publicacion) {
            // La propiedad categorias puede ser un arreglo o un texto
            if (is_array($publicacion->categorias) && (count($publicacion->categorias) > 0)) {
                $categorias = $publicacion->categorias;
            } elseif (is_string($publicacion->categorias) && ($publicacion->categorias != '')) {
                $categorias = array($publicacion->categorias);
            } else {
                continue;
            }
            // Si la categoría está presente en esta publicación
            if (in_array($categoria, $categorias)) {
                $a[] = $publicacion;
            }
        }
        // Si no se encontró ninguna publicación
        if (count($a) == 0) {
            throw new RecolectorExceptionVacio("Aviso en RecolectorCategorias: No se encontraron publicaciones con la categoría $categoria.");
        }
        // Redefinir la propiedad publicaciones
        if (is_int($limite) && ($limite > 0)) {
            $this->publicaciones = array_slice($a, 0, $limite, true);
        } else {
            $this->publicaciones = $a;
        }
    } // filtrar_publicaciones_de_categoria

    /**
     * Quitar filtro
     */
    public function quitar_filtro() {
        if (!is_null($this->publicaciones_todas)) {
            $this->publicaciones = $this->publicaciones_todas;
        }
    } // quitar_filtro

} // Clase RecolectorCategorias

?>
