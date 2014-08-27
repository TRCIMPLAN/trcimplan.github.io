<?php
/*
 * SMIbeta - SMI Indicadores Lerdo Imprenta
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
namespace SMI;

/**
 * Clase ImprentaIndicadoresLerdo
 */
class ImprentaIndicadoresLerdo extends \Base\Imprenta {

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

    /**
     * Constructor
     */
    public function __construct() {
        $this->indicadores_directorio = 'SMIIndicadoresLerdo';
        $this->titulo                 = 'Sistema Metropolitano de Indicadores: Lerdo';
        $this->descripcion            = 'Indicadores de Lerdo. IMPLAN Torreón, Sistema Metropolitano de Indicadores.';
        $this->claves                 = 'IMPLAN, Torreon, Indicadores, Lerdo';
        $this->directorio             = 'indicadores-lerdo';
        $this->ruta                   = 'indicadores-lerdo/index.html';
        $this->nombre_menu            = 'Indicadores Lerdo';
    } // constructor

    /**
     * Imprimir
     *
     * @return string Mensajes para la terminal
     */
    public function imprimir() {
        // Cargar la plantilla para publicaciones
        $this->plantilla                = new \Base\Plantilla();
        $this->plantilla->navegacion    = new \Base\Navegacion();
        $this->plantilla->mapa_inferior = new \Base\MapaInferior();
        // Imprimir los indicadores
        $indicadores = $this->agregar_directorio_publicaciones($this->indicadores_directorio);
        parent::imprimir();
        // Dejar en blanco la propiedad publicaciones, para volver a imprimir
        $this->publicaciones = null;
        // Cargar la matriz de la región
        //PENDIENTE
        // Cargar la plantilla con la matriz de la región
        $this->plantilla->titulo                    = $this->titulo;
        $this->plantilla->descripcion               = $this->descripcion;
        $this->plantilla->claves                    = $this->claves;
        $this->plantilla->directorio                = $this->directorio;
        $this->plantilla->ruta                      = $this->ruta;
        $this->plantilla->navegacion->opcion_activa = $this->nombre_menu;
        $this->plantilla->contenido                 = "<p>Por programar la elaboración de la matriz.</p>";
        // Imprimir el index.html
        parent::imprimir();
        // Entregar mensajes
        return implode("\n", $this->mensajes);
    } // imprimir

} // Clase ImprentaIndicadoresLerdo

?>
