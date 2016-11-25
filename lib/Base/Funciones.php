<?php
/**
 * Plataforma de Conocimiento - Funciones
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
 * Clase Funciones
 */
class Funciones {

    /**
     * Caracteres al azar
     *
     * @param  integer Cantidad de caracteres, por defecto 8
     * @return string  Caracteres al azar
     */
    public static function caracteres_azar($in_cantidad=8) {
        $primera = ord('a');
        $ultima  = ord('z');
        $c = array();
        for ($i=0; $i<$in_cantidad; $i++) {
            $c[] = chr(rand($primera, $ultima));
        }
        return implode('', $c);
    } // caracteres_azar

    /**
     * Caracteres para web
     *
     * @param  string  Nombre a convertir, puede tener a-zA-Z0-9áÁéÉíÍóÓúÚüÜñÑ() .,_-
     * @param  boolean Por defecto es falso, si es verdadero se omiten 'y', 'a', 'el', etc.
     * @return string  Texto convertido a caracteres para web
     */
    public static function caracteres_para_web($in_nombre, $in_omitir_bandera=false) {
        // Omitir estas palabras
        $palabras_omitir = array('y', 'a', 'el', 'la', 'los', 'las', 'de', 'del');
        // Cambiar caracteres
        $buscados        = array('ñ', 'Ñ', 'ü', 'Ü', 'á', 'Á', 'é', 'É', 'í', 'Í', 'ó', 'Ó', 'ú', 'Ú');
        $cambios         = array('n', 'n', 'u', 'u', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
        $sin_acentos     = str_replace($buscados, $cambios, $in_nombre);
        $especiales      = array(' ', '(', ')', '.', ',', '_');
        $minusculas      = strtolower(str_replace($especiales, '-', $sin_acentos));
        // Revisar cada palabra
        $palabras = array();
        foreach (explode('-', $minusculas) as $p) {
            if ($p !== '') {
                if ($in_omitir_bandera && in_array($p, $palabras_omitir)) {
                    continue;
                } else {
                    $palabras[] = $p;
                }
            }
        }
        // Entregar
        return implode('-', $palabras); // Pone guiones medios entre las palabras
    } // caracteres_para_web

    /**
     * Caracteres para clase
     *
     * @param  string  Nombre a convertir, puede tener a-zA-Z0-9áÁéÉíÍóÓúÚüÜñÑ() .,_-
     * @param  boolean Por defecto es falso, si es verdadero se omiten 'y', 'a', 'el', etc.
     * @return string  Texto convertido a caracteres para web
     */
    public static function caracteres_para_clase($in_texto, $in_omitir_bandera=false) {
        // Omitir estas palabras
        $palabras_omitir = array('y', 'a', 'el', 'la', 'los', 'las', 'de', 'del');
        // Cambiar caracteres
        $buscados        = array('ñ', 'Ñ', 'ü', 'Ü', 'á', 'Á', 'é', 'É', 'í', 'Í', 'ó', 'Ó', 'ú', 'Ú');
        $cambios         = array('n', 'n', 'u', 'u', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
        $sin_acentos     = str_replace($buscados, $cambios, $in_texto);
        $especiales      = array('(', ')', '.', ',', '_', '-');
        $minusculas      = strtolower(str_replace($especiales, ' ', $sin_acentos));
        // Poner en mayusculas la primer letra de cada palabra
        $palabras_camel_case = array();
        foreach (explode(' ', $minusculas) as $p) {
            if ($p !== '') {
                if ($in_omitir_bandera && in_array($p, $palabras_omitir)) {
                    continue;
                } else {
                    $palabras_camel_case[] = ucfirst($p);
                }
            }
        }
        // Entregar
        return implode('', $palabras_camel_case);
    } // caracteres_para_clase

    /**
     * Cargar archivo markdown
     *
     * @param  string Ruta al archivo markdown desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.md'
     * @return string Código HTML
     */
    public static function cargar_archivo_markdown($ruta) {
        $contenido = file_get_contents("$ruta");
        if ($contenido === false) {
            throw new \Exception("Error en Funciones::cargar_archivo_markdown: No se puede leer $ruta");
        }
        $html = \Michelf\Markdown::defaultTransform($contenido);
        return $html;
    } // cargar_archivo_markdown

    /**
     * Cargar archivo markdown extra
     *
     * Éste tiene la construcción de tablas.
     *
     * @param  string Ruta al archivo markdown desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.md'
     * @return string Código HTML
     */
    public static function cargar_archivo_markdown_extra($ruta) {
        $contenido = file_get_contents("$ruta");
        if ($contenido === false) {
            throw new \Exception("Error en Funciones::cargar_archivo_markdown_extra: No se puede leer $ruta");
        }
        $html    = \Michelf\MarkdownExtra::defaultTransform($contenido);
        $html_tb = str_replace('<table>', '<table class="table table-hover table-bordered">', $html); // Tablas de Twitter Bootstrap
        return $html_tb;
    } // cargar_archivo_markdown_extra

} // Clase Funciones

?>
