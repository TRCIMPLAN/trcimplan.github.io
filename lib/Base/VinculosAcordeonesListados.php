<?php
/**
 * Plataforma de Conocimiento - Vinculos Acordeones Listados
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
 * Clase VinculosAcordeonesListados
 */
class VinculosAcordeonesListados extends Vinculos {

    // public $identificador;
    // protected $vinculos;
    public $imagen_tamano = 0;
    protected $acordeones;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Si no hay vinculos no se entrega nada
        if (count($this->vinculos) == 0) {
            return '<!-- Sin vínculos -->';
        }
        // Iniciar los acordeones
        $this->acordeones = new Acordeones($this->identificador);
        // Iniciar la variable donde mantendremos el acordeon en turno
        $activa = '';
        // Bucle por los vinculos
        foreach ($this->vinculos as $vinculo) {
            if ($activa == '') {
                $contenido       = array();
                $activa          = $vinculo->directorio;
                $imprenta_titulo = $vinculo->imprenta_titulo;
            } elseif ($vinculo->directorio != $activa) {
                $this->acordeones->agregar($activa, $imprenta_titulo, "      <ul>\n".implode("\n", $contenido)."\n      </ul>");
                $contenido       = array();
                $activa          = $vinculo->directorio;
                $imprenta_titulo = $vinculo->imprenta_titulo;
            }
            if ($vinculo->url() != '') {
                $contenido[] = sprintf('        <li><a href="%s">%s</a></li>', $vinculo->url(), $vinculo->nombre);
            } else {
                $contenido[] = sprintf('        <li>%s</li>', $vinculo->nombre);
            }
        }
        // Acumular la última
        $this->acordeones->agregar($activa, $imprenta_titulo, "      <ul>\n".implode("\n", $contenido)."\n      </ul>");
        // Que el primer acordeón sea el abierto
        $this->acordeones->definir_activa();
        // Entregar
        return $this->acordeones->html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        return $this->acordeones->javascript();
    } // javascript

} // Clase VinculosAcordeonesListados

?>
