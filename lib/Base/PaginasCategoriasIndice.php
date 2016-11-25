<?php
/**
 * Plataforma de Conocimiento - Páginas Categorías Índice
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
 * Clase PaginasCategoriasIndice
 */
class PaginasCategoriasIndice extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    // public $cantidad_maxima;
    // protected $recolector;
    // protected $vinculos;
    // protected $he_concentrado;

    /**
     * Constructor
     *
     * @param mixed Instancia de RecolectorCategorias
     */
    public function __construct(RecolectorCategorias $recolector) {
        $this->recolector = $recolector;
    } // constructor

    /**
     * Concentrar
     */
    protected function concentrar() {
        // Si ya se ha concentrado, no se hace nada
        if ($this->he_concentrado) {
            return;
        }
        // Cargar configuración de las categorías
        $categorias_config = new \Configuracion\CategoriasConfig();
        // Iniciar vínculos
        $clase                         = \Configuracion\CategoriasConfig::VINCULOS_INDICE;
        $this->vinculos                = new $clase();
        $this->vinculos->identificador = 'categorias-indice';
        $this->vinculos->imagen_tamano = $categorias_config->imagen_tamano;
        // Bucle por todas las categorias
        foreach ($this->recolector->obtener_categorias() as $nombre) {
            // Obtener la cantidad de publicaciones de esta categoría
            $this->recolector->filtrar_publicaciones_de_categoria($nombre);
            $cantidad = $this->recolector->obtener_cantidad_de_publicaciones();
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($nombre);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria instanceof Categoria) {
                // Sí está definido
                $categoria->en_raiz = $this->en_raiz;
                $categoria->en_otro = $this->en_otro;
                $etiqueta           = sprintf('%s (%d)', $categoria->nombre, $cantidad);
                $vinculo            = new Vinculo($etiqueta, $categoria->url(), $categoria->icono, \Configuracion\CategoriasConfig::DIRECTORIO, $categoria->descripcion);
                $this->vinculos->agregar($vinculo);
            } elseif ($categorias_config->mostrar_no_definidos) {
                // No está definido
                $etiqueta = sprintf('%s (%d)', $nombre, $cantidad);
                $vinculo  = new Vinculo($etiqueta, sprintf('%s.html', Funciones::caracteres_para_web($nombre)), 'unknown', \Configuracion\CategoriasConfig::DIRECTORIO);
                $this->vinculos->agregar($vinculo);
            }
        }
        // Levantar la bandera
        $this->he_concentrado = true;
    } // concentrar

} // Clase PaginasCategoriasIndice

?>
