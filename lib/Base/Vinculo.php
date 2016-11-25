<?php
/**
 * Plataforma de Conocimiento - Vinculo
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
 * Clase Vinculo
 */
class Vinculo {

    const ICONOS_DIR = 'imagenes'; // Nombre del directorio donde están los subdirectorios 64, 128 y 256 con los iconos
    public $nombre;                // Nombre
    public $vinculo;               // Página HTML o URL en internet a donde debe vincularse
    public $imagen;                // Nombre del archivo para el icono (sin extensión) o ruta relativa al archivo con la imagen
    public $imagen_previa;         // Al usar agregar_publicación, aquí se guarda la imagen chica, mientras que en imagen la grande
    public $directorio;            // Nombre del directorio donde se guardará la publicación completa
    public $descripcion;           // Descripción
    public $autor;                 // Autor
    public $fecha;                 // Fecha
    public $en_raiz = false;       // Verdadero para un URL que va a la raiz del sitio web
    public $en_otro = true;        // Verdadero para un URL a OTRO directorio distinto
    public $boton_etiqueta;        // Etiqueta para usar como texto en un botón en VinculosTarjetas
    public $imagen_id;             // Nombre del ID presente en el CSS para que la imagen cambie al pasar el ratón
    public $imprenta_titulo;       // Título de la Imprenta

    /**
     * Constructor
     *
     * @param string Nombre
     * @param string Vínculo
     * @param string Nombre del archivo para el icono (sin extensión) o ruta relativa al archivo con la imagen
     * @param string Descripción
     * @param string Autor
     * @param string Fecha
     */
    public function __construct($nombre='', $vinculo='', $imagen='', $directorio='', $descripcion='', $autor='', $fecha='') {
        $this->nombre      = $nombre;
        $this->vinculo     = $vinculo;
        $this->imagen      = $imagen;
        $this->directorio  = $directorio;
        $this->descripcion = $descripcion;
        $this->autor       = $autor; // Nota: el autor puede ser texto o arreglo
        $this->fecha       = $fecha;
    } // constructor

    /**
     * Definir con publicacion
     *
     * @param mixed Instancia de Publicacion
     */
    public function definir_con_publicacion(Publicacion $p) {
        // Imponer estas propiedades en la publicación
        $p->en_raiz = $this->en_raiz;
        $p->en_otro = $this->en_otro;
        // Validar publicación
        $p->validar();
        // Definir parámetros desde la publicación
        $this->nombre          = $p->nombre;
        $this->directorio      = $p->directorio;
        $this->descripcion     = $p->descripcion;
        $this->autor           = $p->autor; // Nota: el autor puede ser texto o arreglo
        $this->fecha           = $p->fecha_con_formato_humano();
        $this->imagen_id       = $p->imagen_id;
        $this->imprenta_titulo = $p->imprenta_titulo;
        // La imagen puede ser la imagen_previa o el icono
        if (($p->imagen != '') && ($p->imagen_previa != '')) {
            $this->imagen        = $p->imagen;
            $this->imagen_previa = $p->imagen_previa;
        } elseif ($p->imagen_previa != '') {
            $this->imagen        = $p->imagen_previa;
            $this->imagen_previa = $p->imagen_previa;
        } elseif ($p->imagen != '') {
            $this->imagen        = $p->imagen;
            $this->imagen_previa = $p->imagen;
        } elseif ($p->icono != '') {
            $this->imagen        = $p->icono;
            $this->imagen_previa = '';
        } else {
            $this->imagen        = '';
            $this->imagen_previa = '';
        }
        // Definir el vínculo
        if ($p->archivo != '') {
            $this->vinculo = "{$p->archivo}.html"; // Es una página
        } elseif ($p->url != '') {
            $this->vinculo = $p->url; // Apunta a otra dirección en internet
        } else {
            $this->vinculo = '';
        }
    } // definir_con_publicacion

    /**
     * URL
     *
     * @return string URL relativo para vincular a la página en autores
     */
    public function url() {
        if ($this->vinculo == '') {
            return '';
        } elseif (preg_match('/^(http|https|ftp|ftps):\/\//', $this->vinculo) === 1) {
            return $this->vinculo;
        } elseif ($this->en_raiz) {
            if ($this->directorio != '') {
                return sprintf('%s/%s', $this->directorio, $this->vinculo);
            } else {
                return $this->vinculo;
            }
        } elseif ($this->en_otro) {
            if ($this->directorio != '') {
                return sprintf('../%s/%s', $this->directorio, $this->vinculo);
            } else {
                return sprintf('../%s', $this->vinculo);
            }
        } else {
            return $this->vinculo;
        }
    } // url

    /**
     * Imagen URL
     *
     * @param  string Tamaño, funciona solo si es icono, puede ser 64, 128 o 256, por defecto 128
     * @return string URL relativo a la imagen
     */
    public function imagen_url($tamano=64) {
        // Si el tamaño es cero, no entrega nada
        if ($tamano == 0) {
            return '';
        }
        // Si el tamaño es incorrecto, hay error
        if (($tamano != 256) && ($tamano != 128) && ($tamano != 64)) {
            throw new \Exception("Error en Vinculo: Tamaño de icono incorrecto.");
        }
        // Si es icono solo tiene letras y guiones
        if (preg_match('/^[a-z-]+$/i', $this->imagen) === 1) {
            // Es icono
            if ($this->en_raiz) {
                return sprintf('%s/%s/%s.png', self::ICONOS_DIR, $tamano, $this->imagen);
            } else {
                return sprintf('../%s/%s/%s.png', self::ICONOS_DIR, $tamano, $this->imagen);
            }
        } elseif ($this->imagen == '') {
            // No hay imagen
            return '';
        } else {
            // Es imagen
            if ($tamano == 256) {
                // El tamaño es 256, se entrega la imagen grande
                if ($this->en_raiz) {
                    return sprintf('%s/%s', $this->directorio, $this->imagen);
                } elseif ($this->en_otro) {
                    return sprintf('../%s/%s', $this->directorio, $this->imagen);
                } else {
                    return $this->imagen;
                }
            } else {
                // Se entrega la imagen chica
                if ($this->en_raiz) {
                    return sprintf('%s/%s', $this->directorio, $this->imagen_previa);
                } elseif ($this->en_otro) {
                    return sprintf('../%s/%s', $this->directorio, $this->imagen_previa);
                } else {
                    return $this->imagen_previa;
                }
            }
        }
    } // imagen_url

} // Clase Vinculo

?>
