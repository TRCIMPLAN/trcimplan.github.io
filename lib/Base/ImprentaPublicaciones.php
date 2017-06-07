<?php
/**
 * Plataforma de Conocimiento - Imprenta Publicaciones
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
 * Clase ImprentaPublicaciones
 */
class ImprentaPublicaciones extends Imprenta {

    public $directorio;                // Texto, nombre del directorio en raíz donde se guardará los archivos
    public $publicaciones_directorio;  // Texto, nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    public $encabezado;                // Código HTML para usarse como encabezado
    public $encabezado_color;          // Texto, color de fondo del encabezado #nnnnnn
    public $encabezado_icono;          // Texto, icono Font Awesome
    public $claves;                    // Texto, palabras separadas por comas para meta tag
    public $nombre_menu;               // Texto, opción del menú activa
    public $titulo;                    // Texto, título de la página
    public $descripcion;               // Texto, descripción para meta tag
    public $nivel = 0;                 // Entero, es el orden de la rama para las páginas por categorías
    public $autor;                     // Texto o arreglo, si se define será pasado a las publicaciones
    public $aparece_en_pagina_inicial; // Boleano, si se define será pasado a las publicaciones
    public $para_compartir;            // Boleano, si se define será pasado a las publicaciones
    public $imagen;                    // Texto, si se define será pasado a las publicaciones
    public $imagen_previa;             // Texto, si se define será pasado a las publicaciones
    public $poner_imagen_en_contenido; // Boleano, si se define será pasado a las publicaciones
    protected $archivo_ruta;           // Texto opcional, ruta al archivo index
    protected $indices_paginas;        // Ruta a la clase. Puede ser \Base\PaginasDetallados, \Base\PaginasGalerias, \Base\PaginasListado o \Base\PaginasTarjetas
    protected $recolector;             // Instancia de Recolector
    public    $contador = 0;           // Entero, cantidad de publicaciones producidas

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector = new Recolector();
    } // constructor

    /**
     * Validar
     */
    protected function validar() {
        // Validar publicaciones_directorio
        if (!is_string($this->publicaciones_directorio) || ($this->publicaciones_directorio == '')) {
            throw new \Exception("Falló la validación en ImprentaPublicaciones: No se ha definido el directorio de publicaciones.");
        }
        $lib_dir = sprintf('%s/%s', Recolector::LIB_DIR, $this->publicaciones_directorio);
        if (!is_dir($lib_dir)) {
            throw new \Exception("Falló la validación en ImprentaPublicaciones: No existe el directorio $lib_dir");
        }
        // Validar título
        if (!is_string($this->titulo) || ($this->titulo == '')) {
            $this->titulo = $this->publicaciones_directorio;
        }
        // Validar descripción
        if (!is_string($this->descripcion) || ($this->descripcion == '')) {
            $this->descripcion = "Índice de páginas para {$this->titulo}";
        }
        // Validar claves
        if (!is_string($this->claves) || ($this->claves == '')) {
            throw new \Exception("Falló la validación en ImprentaPublicaciones: No hay claves.");
        }
        // Validar directorio
        if (!is_string($this->directorio) || ($this->directorio == '')) {
            $this->directorio = Funciones::caracteres_para_web($this->publicaciones_directorio);
        }
        // Validar archivo_ruta
        if (!is_string($this->archivo_ruta) || ($this->archivo_ruta == '')) {
            $this->archivo_ruta = "{$this->directorio}/index.html";
        }
        // Validar nombre_menu
        if (!is_string($this->nombre_menu) || ($this->nombre_menu == '')) {
            $this->nombre_menu = $this->titulo;
        }
    } // validar

    /**
     * Imprimir publicaciones
     */
    protected function imprimir_publicaciones() {
        // Validar que haya publicaciones
        if ($this->recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Error en ImprentaPublicaciones: No hay publicaciones para crear.");
        }
        // Iniciar la Plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
        // Imprimir
        $c = 0;
        foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
            // Al incorporar la publicación a la plantilla puede entregar falso cuando no se define el archivo de salida o no tener contenido
            if ($plantilla->incorporar_publicacion($publicacion) == true) {
                // Escribir el archivo HTML
                $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
                $c++;
            }
        }
        // Sumar al contador
        $this->contador += $c;
    } // imprimir_publicaciones

    /**
     * Imprimir índice
     *
     * Crea el archivo index.html
     */
    protected function imprimir_indice() {
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = $this->directorio;
        $plantilla->navegacion->opcion_activa = $this->nombre_menu;
        $plantilla->titulo                    = $this->titulo;
        $plantilla->descripcion               = $this->descripcion;
        $plantilla->claves                    = $this->claves;
        $plantilla->archivo_ruta              = $this->archivo_ruta;
        // Iniciar la página
        $pagina                   = new $this->indices_paginas($this->recolector);
        $pagina->titulo           = $this->titulo;
        $pagina->descripcion      = $this->descripcion;
        $pagina->encabezado       = $this->encabezado;
        $pagina->encabezado_color = $this->encabezado_color;
        $pagina->encabezado_icono = $this->encabezado_icono;
        $pagina->en_raiz          = false;
        $pagina->en_otro          = false;
        // Pasar a la plantilla el HTML y Javascript de la página
        $plantilla->contenido    = $pagina->html();
        $plantilla->javascript[] = $pagina->javascript();
        // Crear archivo
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
    } // imprimir_indice

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaPublicaciones: ";
        $this->validar();
        // Imprimir publicaciones
        $this->recolector->iniciar_para_estado_publicar_y_revisar();
        $this->recolector->agregar_publicaciones_en($this->publicaciones_directorio, $this);
        $this->crear_directorio($this->directorio);
        $this->imprimir_publicaciones();
        // Imprimir índice
        $this->recolector->iniciar_para_estado_publicar();
        $this->recolector->agregar_publicaciones_en($this->publicaciones_directorio, $this);
        $this->imprimir_indice();
        // Mostrar en pantalla
        echo sprintf(" %d en %s\n", $this->contador, $this->directorio);
    } // imprimir

} // Clase ImprentaPublicaciones

?>
