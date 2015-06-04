<?php
/*
 * TrcIMPLAN Sitio Web - Imprenta Publicaciones
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
 * Clase ImprentaPublicaciones
 */
class ImprentaPublicaciones extends Imprenta {

    // public $base_dir;                    // Directorio 'lib', donde están los objetos con las publicaciones, relativo desde htdocs
    // public $plantilla;                   // Instancia de Plantilla
    // public $publicaciones;               // Arreglo con instancias de Publicacion
    // public $plantillas;                  // Arreglo con instancias de Plantillas
    protected $publicaciones_directorio;    // Nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    protected $titulo;                      // Título a usar en la página con el índice
    protected $descripcion;                 // Descripción a usar en la página con el índice
    protected $claves;                      // Claves a usar en la página con el índice
    protected $directorio;                  // Nombre del directorio en la raíz del sitio
    protected $archivo_ruta;                // Ruta desde la raíz al archivo HTML para el índice, por ejemplo 'eventos/index.html'
    protected $nombre_menu;                 // Etiqueta del menú que pondrá como opción activa
    protected $concentrador     = 'Indice'; // Clase que concentrará este conjunto de publicaciones. Puede ser 'Indice' o 'Galeria'.
    protected $encabezado;                  // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public    $encabezado_color = '';       // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    public    $encabezado_icono = '';       // Opcional. Icono de Font Awsome.

    /**
     * Elaborar resúmenes para la página de inicial
     *
     * @return mixed Instancia de Resumenes
     */
    public function elaborar_resumenes() {
        // Cargar publicaciones
        $publicaciones = $this->agregar_directorio_publicaciones($this->publicaciones_directorio);
        // Iniciar instancia de Resumenes con las publicaciones
        $resumenes         = new Resumenes($publicaciones);
        $resumenes->titulo = $this->titulo;
        // Entregarla
        return $resumenes;
    } // elaborar_resumenes

    /**
     * Imprimir
     *
     * @return string Mensajes para la terminal
     */
    public function imprimir() {
        // Para las publicaciones, preparar la Plantilla
        $this->plantilla                = new Plantilla();
        $this->plantilla->navegacion    = new Navegacion();
        $this->plantilla->mapa_inferior = new MapaInferior();
        // Cargar las publicaciones
        $publicaciones = $this->agregar_directorio_publicaciones($this->publicaciones_directorio, $this->encabezado_color, $this->encabezado_icono);
        // Validar y cargar las publicaciones en el concentrador, que se usará más adelante para crear el index.html
        switch ($this->concentrador) {
            case 'Indice':
                $concentrador = new Indice($publicaciones);
                break;
            case 'Galeria':
                $concentrador = new Galeria($publicaciones);
                break;
            case 'Tarjetas':
                $concentrador = new Tarjetas($publicaciones);
                break;
            default:
                throw new \Exception("Error: El concentrador es incorrecto; debe ser Indice, Galeria o Tarjetas.");
        }
        // Imprimir las publicaciones
        $mensaje_publicaciones = sprintf('En %s hubo %s', $this->publicaciones_directorio, parent::imprimir());
        // Dejar en blanco las propiedades publicaciones y plantilla, para volver a imprimir
        unset($this->publicaciones);
        unset($this->plantilla);
        // Ahora para index.html, nueva instancia de Plantilla
        $this->plantilla                = new Plantilla();
        $this->plantilla->navegacion    = new Navegacion();
        $this->plantilla->mapa_inferior = new MapaInferior();
        // Cargar el concentrador con las publicaciones
        $concentrador->titulo           = $this->titulo;
        $concentrador->encabezado       = $this->encabezado;
        $concentrador->encabezado_color = $this->encabezado_color;
        // Cargar la plantilla
        $this->plantilla->titulo                    = $this->titulo;
        $this->plantilla->descripcion               = $this->descripcion;
        $this->plantilla->claves                    = $this->claves;
        $this->plantilla->directorio                = $this->directorio;
        $this->plantilla->archivo_ruta              = $this->archivo_ruta;
        $this->plantilla->navegacion->opcion_activa = $this->nombre_menu;
        $this->plantilla->contenido                 = $concentrador->html();
        $this->plantilla->javascript[]              = $concentrador->javascript();
        // Imprimir index.html
        $mensaje_index = $this->concentrador.' '.parent::imprimir();
        // Entregar mensajes
        return sprintf('%s & %s', $mensaje_publicaciones, $mensaje_index);
    } // imprimir

} // Clase ImprentaPublicaciones

?>
