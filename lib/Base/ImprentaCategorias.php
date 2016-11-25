<?php
/**
 * Plataforma de Conocimiento - Imprenta Categorías
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
 * Clase ImprentaCategorias
 */
class ImprentaCategorias extends Imprenta {

    protected $imprentas;      // Arreglo con rutas a las clases de ImprentaPublicaciones
    protected $recolector;     // Instancia de RecolectorCategorias
    protected $contador   = 0; // Entero, cantidad de archivos HTML de categorías creados

    /**
     * Constructor
     *
     * @param array Arreglo con rutas a las clases de ImprentaPublicaciones
     */
    public function __construct($imprentas) {
        $this->imprentas  = $imprentas;
        $this->recolector = new RecolectorCategorias();
    } // constructor

    /**
     * Imprimir categorías
     *
     * Crea los archivos para cada categoria como nombre.html
     */
    protected function imprimir_individuales() {
        // Cargar configuración de las categorías
        $categorias_config = new \Configuracion\CategoriasConfig();
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = \Configuracion\CategoriasConfig::DIRECTORIO;
        $plantilla->navegacion->opcion_activa = \Configuracion\CategoriasConfig::NAVEGACION_OPCION_ACTIVA;
        // Bucle por todas las categorías
        foreach ($this->recolector->obtener_categorias() as $categoria_texto) {
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($categoria_texto);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria === false) {
                $categoria              = new Categoria($categoria_texto);
                $categoria->descripcion = "Publicaciones en la categoría $categoria_texto";
            }
            // Definir ruta del archivo a crear, las banderas en falso hacen que el URL sea categoria.html
            $categoria->en_raiz = false;
            $categoria->en_otro = false;
            $ruta               = sprintf('%s/%s', $plantilla->directorio, $categoria->url());
            // Filtrar por esta categoría
            $this->recolector->filtrar_publicaciones_de_categoria($categoria_texto);
            // Iniciar página
            $pagina          = new PaginasCategoriasIndividual($categoria, $this->recolector);
            $pagina->en_raiz = false;
            $pagina->en_otro = true;
            // Pasar a la plantilla los valores que cambian en cada página
            $plantilla->titulo       = $pagina->titulo;
            $plantilla->descripcion  = $pagina->descripcion;
            $plantilla->claves       = "Categoria, $categoria_texto";
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
     * Imprimir índice
     *
     * Crea el archivo index.html
     */
    protected function imprimir_indice() {
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = \Configuracion\CategoriasConfig::DIRECTORIO;
        $plantilla->navegacion->opcion_activa = \Configuracion\CategoriasConfig::NAVEGACION_OPCION_ACTIVA;
        $plantilla->titulo                    = \Configuracion\CategoriasConfig::INDICE_TITULO;
        $plantilla->descripcion               = \Configuracion\CategoriasConfig::INDICE_DESCRIPCION;
        $plantilla->claves                    = \Configuracion\CategoriasConfig::INDICE_CLAVES;
        $plantilla->archivo_ruta              = sprintf('%s/index.html', $plantilla->directorio);
        // Iniciar la página
        $pagina              = new PaginasCategoriasIndice($this->recolector);
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
        echo "ImprentaCategorias: ";
        if ($this->recolector->agregar_publicaciones_de_imprentas($this->imprentas)) {
            $this->crear_directorio(\Configuracion\CategoriasConfig::DIRECTORIO);
            $this->imprimir_individuales();
            $this->imprimir_indice();
            echo sprintf(" %d en %s\n", $this->contador, \Configuracion\CategoriasConfig::DIRECTORIO);
        } else {
            echo " nulo\n";
        }
    } // imprimir

} // Clase ImprentaCategorias

?>
