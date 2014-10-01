<?php
/*
 * SMIbeta - Imprenta Publicaciones
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

    // public $plantilla;
    // public $mensajes;
    // protected $publicaciones;
    // protected $plantillas;
    protected $publicaciones_directorio; // Nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    protected $titulo;                   // Título a usar en la página con el índice
    protected $descripcion;              // Descripción a usar en la página con el índice
    protected $claves;                   // Claves a usar en la página con el índice
    protected $directorio;               // Nombre del directorio en la raíz del sitio
    protected $ruta;                     // Ruta al archivo HTML para el índice, por ejemplo 'eventos/index.html'
    protected $nombre_menu;              // Etiqueta del menú que pondrá como opción activa
    protected $concentrador = 'Indice';  // Clase que concentrará este conjunto de publicaciones. Puede ser 'Indice' o 'Galeria'.

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
        // Validar concentrador
        if (($this->concentrador != 'Indice') && ($this->concentrador != 'Galeria')) {
            throw new \Exception("Error: El concentrador es incorrecto.");
        }
        // Cargar la plantilla para publicaciones
        $this->plantilla                = new \Base\Plantilla();
        $this->plantilla->navegacion    = new \Base\Navegacion();
        $this->plantilla->mapa_inferior = new \Base\MapaInferior();
        // Cargar las publicaciones
        $publicaciones = $this->agregar_directorio_publicaciones($this->publicaciones_directorio);
        // Imprimir las publicaciones
        parent::imprimir();
        // Agregar mensaje
        $this->mensajes[] = "Se han impreso todas las publicaciones.";
        // Dejar en blanco la propiedad publicaciones, para volver a imprimir
        $this->publicaciones = null;
        // Nueva instancia de Plantilla, para evitar restos de datos
        $this->plantilla                = new \Base\Plantilla();
        $this->plantilla->navegacion    = new \Base\Navegacion();
        $this->plantilla->mapa_inferior = new \Base\MapaInferior();
        // Cargar el índice con las publicaciones
        if ($this->concentrador == 'Indice') {
            $concentrador = new Indice($publicaciones);
        } elseif ($this->concentrador == 'Galeria') {
            $concentrador = new Galeria($publicaciones);
        }
        $concentrador->titulo = $this->titulo;
        // Cargar la plantilla para índice
        $this->plantilla->titulo                    = $this->titulo;
        $this->plantilla->descripcion               = $this->descripcion;
        $this->plantilla->claves                    = $this->claves;
        $this->plantilla->directorio                = $this->directorio;
        $this->plantilla->ruta                      = $this->ruta;
        $this->plantilla->navegacion->opcion_activa = $this->nombre_menu;
        $this->plantilla->contenido                 = $concentrador->html();
        // Imprimir index.html
        parent::imprimir();
        // Agregar mensaje
        $this->mensajes[] = "Se ha impreso el/la {$this->concentrador}.";
        // Entregar mensajes
        return implode("\n", $this->mensajes);
    } // imprimir

} // Clase ImprentaPublicaciones

?>
