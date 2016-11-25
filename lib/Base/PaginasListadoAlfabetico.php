<?php
/**
 * Plataforma de Conocimiento - Páginas Listado Alfabético
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
 * Clase PaginasListadoAlfabetico
 */
class PaginasListadoAlfabetico extends Paginas {

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
     * @param mixed Instancia de Recolector ya con las publicaciones
     */
    public function __construct(Recolector $recolector) {
        $this->recolector = $recolector;
        $this->vinculos   = new VinculosListadoAlfabetico();
    } // constructor

    /**
     * Concentrar
     */
    protected function concentrar() {
        // Si ya se ha concentrado, no se hace nada
        if ($this->he_concentrado) {
            return;
        }
        // Pasar parámetros a vínculos
        $this->vinculos->en_raiz = $this->en_raiz;
        $this->vinculos->en_otro = $this->en_otro;
        // Ordenar publicaciones alfabéticamente
        $this->recolector->ordenar_por_directorio_nombre_asc();
        // Bucle por las publicaciones, tiene la cantidad límite
        foreach ($this->recolector->obtener_publicaciones($this->cantidad_maxima) as $publicacion) {
            // Sólo las publicaciones con estado publicar
            if (strtolower($publicacion->estado) == 'publicar') {
                // Definir vínculo
                $vinculo          = new \Base\Vinculo();
                $vinculo->en_raiz = $this->en_raiz;
                $vinculo->en_otro = $this->en_otro;
                $vinculo->definir_con_publicacion($publicacion);
                // Agregar
                $this->vinculos->agregar($vinculo);
            }
        }
        // Levantar la bandera
        $this->he_concentrado = true;
    } // concentrar

} // Clase PaginasListadoAlfabetico

?>
