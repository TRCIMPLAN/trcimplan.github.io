<?php
/**
 * Plataforma de Conocimiento - Imprenta Autores
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
 * Clase ImprentaAutores
 */
class ImprentaAutores extends Imprenta {

    protected $imprentas;      // Arreglo con rutas a las clases de ImprentaPublicaciones
    protected $recolector;     // Instancia de RecolectorAutores
    protected $contador   = 0; // Entero, cantidad de archivos HTML de autores creados

    /**
     * Constructor
     *
     * @param array Arreglo con rutas a las clases de ImprentaPublicaciones
     */
    public function __construct($imprentas) {
        $this->imprentas  = $imprentas;
        $this->recolector = new RecolectorAutores();
    } // constructor

    /**
     * Imprimir individuales
     *
     * Crea los archivos para cada autor
     */
    protected function imprimir_individuales() {
        // Cargar la configuración de autores
        $autores_config = new \Configuracion\AutoresConfig();
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = \Configuracion\AutoresConfig::DIRECTORIO;
        $plantilla->navegacion->opcion_activa = \Configuracion\AutoresConfig::NAVEGACION_OPCION_ACTIVA;
        // Bucle por todas los autores
        foreach ($this->recolector->obtener_autores() as $autor_texto) {
            // Obtener instancia de Autor
            $autor = $autores_config->obtener($autor_texto);
            // Si está definido en \Configuracion\AutoresConfig
            if ($autor === false) {
                $autor = new Autor('', '', $autor_texto);
            }
            // Definir ruta del archivo a crear, las banderas en falso hacen que el URL sea autor.html
            $autor->en_raiz = false;
            $autor->en_otro = false;
            $ruta           = sprintf('%s/%s', $plantilla->directorio, $autor->url());
            // Filtrar por este autor
            $this->recolector->filtrar_publicaciones_de_autor($autor_texto);
            // Iniciar página
            $pagina          = new PaginasAutoresIndividual($autor, $this->recolector);
            $pagina->en_raiz = false;
            $pagina->en_otro = true;
            // Pasar a la plantilla estos valores
            $plantilla->titulo       = $pagina->titulo;
            $plantilla->descripcion  = $pagina->descripcion;
            $plantilla->claves       = "Autor, $autor_texto";
            $plantilla->archivo_ruta = $ruta;
            // Pasar a la plantilla el HTML y Javascript
            $plantilla->contenido    = $pagina->html();
            $plantilla->javascript   = $pagina->javascript();
            // Crear archivo
            $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
            $this->contador++;
        }
    } // imprimir_individuales

    /**
     * Imprimir index
     *
     * Crea el archivo index.html
     */
    protected function imprimir_indice() {
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = \Configuracion\AutoresConfig::DIRECTORIO;
        $plantilla->navegacion->opcion_activa = \Configuracion\AutoresConfig::NAVEGACION_OPCION_ACTIVA;
        $plantilla->titulo                    = \Configuracion\AutoresConfig::INDICE_TITULO;
        $plantilla->descripcion               = \Configuracion\AutoresConfig::INDICE_DESCRIPCION;
        $plantilla->claves                    = \Configuracion\AutoresConfig::INDICE_CLAVES;
        $plantilla->archivo_ruta              = sprintf('%s/index.html', $plantilla->directorio);
        // Iniciar la página
        $pagina              = new PaginasAutoresIndice($this->recolector);
        $pagina->titulo      = $plantilla->titulo;
        $pagina->descripcion = $plantilla->descripcion;
        $pagina->en_raiz     = false;
        $pagina->en_otro     = true;
        // Pasar a la plantilla el HTML y Javascript de la página
        $plantilla->contenido  = $pagina->html();
        $plantilla->javascript = $pagina->javascript();
        // Crear archivo
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
    } // imprimir_indice

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaAutores: ";
        if ($this->recolector->agregar_publicaciones_de_imprentas($this->imprentas)) {
            $this->crear_directorio(\Configuracion\AutoresConfig::DIRECTORIO);
            $this->imprimir_individuales();
            $this->imprimir_indice();
            echo sprintf(" %d en %s\n", $this->contador, \Configuracion\AutoresConfig::DIRECTORIO);
        } else {
            echo "nulo\n";
        }
    } // imprimir

} // Clase ImprentaAutores

?>
