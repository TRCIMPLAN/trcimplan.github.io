<?php
/*
 * SMIbeta - Publicación
 *
 * Copyright (C) 2014 IMPLAN Torreón
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

// Namespace
namespace Base;

/**
 * Clase Publicacion
 */
class Publicacion extends \Configuracion\PublicacionConfig {

    // public $fecha;                     // La fecha en forma de YYYY-MM-DD HH:MM, siendo así se ordena cronológicamente
    // public $autor;                     // El nombre o apodo a quien se le atribuye
    // public $aparece_en_pagina_inicial; // Verdadero si va aparecer en la página de inicio
    // public $imagen_previa;             // Ruta relativa a un archivo de imagen para la vista previa
    // public $icono                      // Nombre del icono Font Awsome
    // public $estado                     // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
    public $nombre;                       // Título completo
    public $nombre_menu;                  // Un título corto. Debe coincidir con la etiqueta usada en Navegacion
    public $directorio;                   // Directorio donde se guardará la publicación completa
    public $archivo;                      // El nombre del archivo para la publicación
    public $descripcion;                  // Descripción del sitio o la página
    public $claves;                       // Claves que ayuden a los buscadores
    public $categorias   = array();       // Arreglo con las categorías de la publicación
    public $encabezado;                   // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $contenido;                    // Contenido código HTML de la publicación
    public $javascript;                   // Opcional. Código Javascript. Debe estar aparte para ponerlo al final de la página.
    public $en_raiz      = false;         // Verdadero si el archivo va a la raiz del sitio web. Debe ser verdadero cuando se hacen las páginas de inicio.
    public $en_otro      = false;         // Verdadero si el archivo va a OTRO lugar como al directorio autores, categorias, etc.

    /**
     * URL
     *
     * @return string URL para enlazar, segun las banderas en_raiz y en_otro
     */
    public function url() {
        if ($this->en_raiz) {
            return "{$this->directorio}/{$this->archivo}.html";
        } elseif ($this->otro) {
            return "../{$this->directorio}/{$this->archivo}.html";
        } else {
            return "{$this->archivo}.html";
        }
    } // url

    /**
     * URL absoluto
     *
     * @return string URL absoluto de la publicación
     */
    public function url_absoluto() {
        $plantilla = new \Configuracion\PlantillaConfig();
        return sprintf('%s/%s/%s.html', $plantilla->sitio_url, $this->directorio, $this->archivo);
    } // url_absoluto

    /**
     * Imagen previa URL
     *
     * @return string URL para enlazar, segun las banderas en_raiz y en_otro
     */
    public function imagen_previa_url() {
        // Si el URL es absoluto
        if ((strpos($this->imagen_previa, 'http://') === 0) || (strpos($this->imagen_previa, 'https://') === 0) || (strpos($this->imagen_previa, '/') === 0)) {
            return $this->imagen_previa;
        } elseif ($this->en_raiz) {
            if (strpos($this->imagen_previa, '../') === 0) {
                return substr($this->imagen_previa, 3);
            } else {
                return "{$this->directorio}/{$this->imagen_previa}";
            }
        } elseif ($this->otro) {
            return "../{$this->directorio}/{$this->imagen_previa}";
        } else {
            return "{$this->imagen_previa}";
        }
    } // imagen_previa_url

    /**
     * Tiempo desde que fue creado
     *
     * @return integer Timestamp
     */
    public function tiempo_creado() {
        $fecha = new \DateTime($this->fecha, new \DateTimeZone('America/Monterrey'));
        return sprintf('%012d', time() - $fecha->getTimestamp());
    } // tiempo_creado

    /**
     * Fecha con formato humano
     *
     * @return string Fecha en el formato DD/MM/YYYY
     */
    public function fecha_con_formato_humano() {
        $a = explode('-', $this->fecha);
        return sprintf('%02d/%02d/%04d', $a[2], $a[1], $a[0]);
    } // fecha_con_formato_humano

} // Clase Publicacion

?>
