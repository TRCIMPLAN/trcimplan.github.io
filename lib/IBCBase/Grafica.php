<?php
/**
 * TrcIMPLAN IBCBase - Grafica
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace IBCBase;

/**
 * Clase abstracta Grafica
 */
abstract class Grafica {

    protected $identificador;                 // Texto único que lo identifica
    protected $titulo;
    protected $etiquetas_valores = array();
    protected $etiquetas_colores = array();
    protected $post_nota;
    const     COLOR_POR_DEFECTO  = '#FF7F37';

    /**
     * Constructor
     *
     * @param string Texto único que lo identifica
     */
    public function __construct($identificador) {
        $this->identificador = $identificador;
    } // constructor

    /**
     * Definir título e identificador si no se tiene
     *
     * @param string Título
     */
    public function definir_titulo($titulo) {
        $this->titulo = $titulo;
        if ($this->identificador == NULL) {
            $this->identificador = \Base\Funciones::caracteres_para_clase($this->titulo);
        }
    } // titulo

    /**
     * Agregar
     *
     * @param string Etiqueta
     * @param string Valor, si es nulo no será agregado
     * @param string Opcional, color en hexadecimal como #rrggbb
     */
    public function agregar($etiqueta, $valor, $color = NULL) {
        if ($valor !== NULL) {
            $this->etiquetas_valores[$etiqueta] = $valor;
            if (is_string($color) && ($color != NULL)) {
                $this->etiquetas_colores[$etiqueta] = $color;
            } else {
                $this->etiquetas_colores[$etiqueta] = self::COLOR_POR_DEFECTO;
            }
        }
    } // agregar

    /**
     * Definir post nota
     *
     * @param string Texto a poner después de cada valor en la nota
     */
    public function definir_post_nota($post_nota) {
        $this->post_nota = $post_nota;
    } // definir_post_nota

    /**
     * Validar
     */
    protected function validar() {
        if (!is_string($this->identificador) || ($this->identificador == '')) {
            throw new \Exception("Error: Falta el identificador.");
        }
        if (count($this->etiquetas_valores) == 0) {
            throw new GraficaExceptionSinValores("Error: Faltan agregar valores en {$this->identificador}.");
        }
    } // validar

} // Clase abstracta Grafica

?>
