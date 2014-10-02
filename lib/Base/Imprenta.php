<?php
/*
 * SMIbeta - Imprenta
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
 * Clase Imprenta
 */
class Imprenta {

    public $plantilla;               // Instancia de Plantilla
    public $mensajes      = array(); // Arreglo con mensajes para la terminal
    public $publicaciones = array(); // Arreglo con instancias de Publicacion
    public $plantillas    = array(); // Arreglo con instancias de Plantillas

    /**
     * Eliminar un directorio y todos sus archivos
     *
     * @param string Ruta al directorio a eliminar
     */
    public function eliminar_directorio($ruta) {
        // Validar parámetro
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, eliminar_directorio: Parámetro vacio.");
        }
        // Mensaje
        $this->mensajes[] = "  Eliminando directorio $ruta...";
        // Si existe elimina los archivos que haya en éste
        if (is_dir($ruta)) {
            array_map('unlink', glob("$ruta/*"));
            if (rmdir($ruta) === false) {
                throw new ImprentaExceptionFallo("Error en Imprenta, eliminar_directorio: No se pudo eliminar $ruta.");
            }
        } else {
            // $this->mensajes[] = "  Nada que eliminar, porque no existe $ruta.";
        }
    } // eliminar_directorio

    /**
     * Crear directorio
     *
     * @param string Ruta al directorio a crear
     */
    public function crear_directorio($ruta) {
        // Validar parámetro
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_directorio: Parámetro vacio.");
        }
        // Si no existe el directorio, lo crea
        if (!is_dir($ruta)) {
            if (mkdir($ruta, 0755) === false) {
                throw new ImprentaExceptionFallo("Error en Imprenta, crear_directorio: No se pudo crear el directorio $ruta");
            } else {
                $this->mensajes[] = "  Creado el directorio $ruta...";
            }
        } else {
            // $this->mensajes[] = "  Nada que crear, porque ya existe el directorio $ruta.";
        }
    } // crear_directorio

    /**
     * Crear archivo
     *
     * @param string Ruta al archivo a crear
     * @param mixed  Texto o arreglo con el contenido
     */
    public function crear_archivo($ruta, $contenido) {
        // Validar parámetros
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_archivo: Parámetro vacío, la ruta.");
        }
        if (trim($contenido) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_archivo: Parámetro vacío, el contenido.");
        }
        // Crear archivo
        $apuntador = fopen($ruta, 'w');
        if ($apuntador === false) {
            throw new ImprentaExceptionFallo("Error en Imprenta, crear_archivo: No se puede crear $ruta");
        }
        if (is_string($contenido)) {
            fwrite($apuntador, $contenido);
        } elseif (is_array($contenido)) {
            foreach ($contenido as $linea) {
                fwrite($apuntador, $contenido);
            }
        }
        fclose($apuntador);
        // Agregar mensaje
        $this->mensajes[] = "  Listo $ruta";
        // Entregar mensaje
        return "  Listo $ruta";
    } // crear_archivo

    /**
     * Recolectar Clases
     *
     * @param  string Nombre del directorio que debe estar dentro de \lib de donde se recolectarán los archivos PHP
     * @return array  Arreglo con textos de la forma Directorio\Clase
     */
    public function recolectar_clases($dir) {
        // Validar parámetro
        if (!is_string($dir) || (trim($dir) == '')) {
            throw new ImprentaExceptionValidacion('Error en Imprenta, recolectar_clases: Parámetro incorrecto.');
        }
        // Directorio de donde tomar los archivos
        $directorio = "lib/$dir";
        // Si no existe
        if (!is_dir($directorio)) {
            throw new ImprentaExceptionValidacion("  No existe el directorio $directorio.");
        }
        // Obtener el listado con los archivos PHP
        $archivos = glob("$directorio/*.php");
        if ($archivos === false) {
            throw new ImprentaExceptionFallo("  Falló la obtención de archivos PHP en el directorio $directorio.");
        }
        if (count($archivos) == 0) {
            throw new ImprentaExceptionVacio("  No hay archivos PHP en el directorio $directorio.");
        }
        // Bucle en los archivos encontrados
        $a = array();
        foreach ($archivos as $archivo) {
            // Definir la ruta a la clase
            $a[] = $dir.'\\'.basename($archivo, '.php');
        }
        // Entregar
        return $a;
    } // recolectar_clases

    /**
     * Agregar Directorio con Publicaciones
     *
     * @param  string Nombre del directorio que debe estar dentro de \lib de donde se recolectarán los archivos PHP
     * @return array  Arreglo con las instancias de Publicaciones ordenado cronológicamente
     */
    public function agregar_directorio_publicaciones($dir) {
        // Acumularemos las instancias en este arreglo
        $instancias = array();
        // Bucle con las clases recolectadas
        foreach ($this->recolectar_clases($dir) as $clase) { // Puede causar una excepción
            // Cargar
            $publicacion = new $clase();
            // Si es instancia de Publicacion, se acumula
            if ($publicacion instanceof Publicacion) {
                // Si el estado es diferente de publicar o revisar, se salta
                if (($publicacion->estado != 'publicar') && ($publicacion->estado != 'revisar')) {
                    continue;
                }
                // La clave del arreglo asociativo es el tiempo_creado-archivo
                $clave              = "{$publicacion->tiempo_creado()}-{$publicacion->archivo}";
                $instancias[$clave] = $publicacion;
            } else {
                $this->mensajes[] = "  Omití $clase porque no es una publicación.";
            }
        }
        // Al ordenar de forma ascendente por la clave, queda del más nuevo al más viejo
        ksort($instancias);
        // Acumular
        $this->publicaciones = array_merge($this->publicaciones, $instancias);
        // Al ordenar de forma ascendente por la clave, queda del más nuevo al más viejo
        ksort($this->publicaciones);
        // Entregar
        return $instancias;
    } // agregar_directorio

    /**
     * Agregar Directorio con Plantillas
     *
     * @param string Nombre del directorio que debe estar dentro de \lib de donde se recolectarán los archivos PHP
     */
    public function agregar_directorio_plantillas($dir) {
        // Acumularemos las instancias en este arreglo
        $instancias = array();
        // Bucle con las clases recolectadas
        foreach ($this->recolectar_clases($dir) as $clase) { // Puede causar una excepción
            // Cargar
            $plantilla = new $clase();
            // Si es instancia de Plantilla, se acumula
            if ($plantilla instanceof Plantilla) {
                $instancias[] = $plantilla;
            }
        }
        // Acumular
        $this->plantillas = array_merge($this->plantillas, $instancias);
    } // agregar_directorio_plantillas

    /**
     * Imprimir
     *
     * @return string Mensajes para la terminal
     */
    public function imprimir() {
        // Validar que la plantilla esté definida
        if (!is_object($this->plantilla)) {
            throw new ImprentaExceptionValidacion("Error en Imprenta, imprimir: La propiedad plantilla no es una instancia.");
        }
        if (!($this->plantilla instanceof Plantilla)) {
            throw new ImprentaExceptionValidacion("Error en Imprenta, imprimir: La propiedad plantilla no es instancia de Plantilla.");
        }
        // Si hay datos en el arreglo Publicaciones
        if (count($this->publicaciones) > 0) {
            foreach ($this->publicaciones as $publicacion) {
                // Incorporar publicación a la plantilla
                $this->plantilla->incorporar_publicacion($publicacion);
                // Escribir el archivo HTML
                $this->crear_directorio($this->plantilla->directorio);                  // Puede causar una excepción
                $this->crear_archivo($this->plantilla->ruta, $this->plantilla->html()); // Puede causar una excepción
            }
        }
        // Si hay datos en el arreglo Plantillas
        if (count($this->plantillas) > 0) {
            foreach ($this->plantillas as $plantilla) {
                // Escribir el archivo HTML
                $this->crear_directorio($plantilla->directorio);            // Puede causar una excepción
                $this->crear_archivo($plantilla->ruta, $plantilla->html()); // Puede causar una excepción
            }
        }
        // Si NO hubo Publicaciones NI Plantillas, se imprime la Plantilla
        if ((count($this->publicaciones) == 0) && (count($this->plantillas) == 0)) {
            // Entonces se imprime la Plantilla
            $this->crear_directorio($this->plantilla->directorio);                  // Puede causar una excepción
            $this->crear_archivo($this->plantilla->ruta, $this->plantilla->html()); // Puede causar una excepción
        }
        // Entregar mensajes
        return implode("\n", $this->mensajes);
    } // imprimir

} // Clase Imprenta

?>
