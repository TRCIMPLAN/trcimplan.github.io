<?php
/**
 * Plataforma de Conocimiento - Imprenta Publicaciones Clasificadas por Categorías
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
 * Clase ImprentaPublicacionesClasificadasPorCategorias
 */
class ImprentaPublicacionesClasificadasPorCategorias extends ImprentaPublicaciones {

    // public $directorio;
    // public $publicaciones_directorio;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $claves;
    // public $nombre_menu;
    // public $titulo;
    // public $descripcion;
    // public $nivel = 0;
    // protected $archivo_ruta;
    // protected $indices_paginas;
    // protected $recolector;
    // public $contador;
    protected $ultimas_encabezado    = 'Últimas publicaciones';
    protected $ultimas_vinculos      = '\\Base\\VinculosDetallados';
    protected $ultimas_cantidad      = 4;
    protected $categorias_encabezado = 'Categorías';
    protected $categorias_vinculos   = '\\Base\\VinculosCompactos';

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector = new RecolectorCategorias();
    } // constructor

    /**
     * Imprimir categorias
     *
     * Crea archivos para cada categoria como categoria-nombre.html
     */
    protected function imprimir_categorias() {
        // Cargar configuración de las categorías
        $categorias_config = new \Configuracion\CategoriasConfig();
        // Iniciar la Plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = $this->directorio;
        $plantilla->navegacion->opcion_activa = $this->nombre_menu;
        // Bucle por todas las categorias
        foreach ($this->recolector->obtener_categorias() as $categoria_texto) {
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($categoria_texto);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria === false) {
                $categoria              = new Categoria($categoria_texto);
                $categoria->descripcion = "Categoría $categoria_texto en {$this->titulo}";
            }
            // Definir ruta del archivo a crear
            $ruta = sprintf('%s/categoria-%s.html', $plantilla->directorio, \Base\Funciones::caracteres_para_web($categoria->nombre));
            // Filtrar por esta categoría
            $this->recolector->filtrar_publicaciones_de_categoria($categoria_texto);
            // Iniciar página
            $pagina              = new $this->indices_paginas($this->recolector);
            $pagina->titulo      = "{$this->titulo} en {$categoria->nombre}";
            $pagina->descripcion = $categoria->descripcion;
            $pagina->en_raiz     = false;
            $pagina->en_otro     = false;
            // Pasar a la plantilla los valores que cambian en cada página
            $plantilla->titulo       = $categoria->nombre;
            $plantilla->descripcion  = $categoria->descripcion;
            $plantilla->claves       = "{$this->claves}, {$categoria->nombre}";
            $plantilla->archivo_ruta = $ruta;
            // Pasar a la plantilla el HTML y Javascript
            $plantilla->contenido    = $pagina->html();
            $plantilla->javascript   = $pagina->javascript();
            // Crear archivo
            $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
            $this->contador++;
        }
    } // imprimir_categorias

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
        $pagina                          = new PaginasPublicacionesClasificadasPorCategorias($this->recolector);
        $pagina->titulo                  = $this->titulo;
        $pagina->descripcion             = $this->descripcion;
        $pagina->ultimas_encabezado      = $this->ultimas_encabezado;
        $pagina->ultimas_vinculos        = $this->ultimas_vinculos;
        $pagina->ultimas_cantidad        = $this->ultimas_cantidad;
        $pagina->categorias_encabezado   = $this->categorias_encabezado;
        $pagina->categorias_vinculos     = $this->categorias_vinculos;
        $pagina->en_raiz                 = false;
        $pagina->en_otro                 = false;
        // Pasar a la plantilla el HTML y Javascript
        $plantilla->contenido  = $pagina->html();
        $plantilla->javascript = $pagina->javascript();
        // Crear archivo
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
    } // imprimir_indice

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaPublicacionesClasificadosPorCategorias: ";
        $this->validar();
        $this->recolector->agregar_publicaciones_en($this->publicaciones_directorio, $this);
        $this->crear_directorio($this->directorio);
        $this->imprimir_publicaciones();
        $this->imprimir_indice();
        $this->imprimir_categorias();
        echo sprintf(" %d en %s\n", $this->contador, $this->directorio);
    } // imprimir

} // Clase ImprentaPublicacionesClasificadasPorCategorias

?>
