<?php
/**
 * TrcIMPLAN IBCBase - EjeEducacionTablaWeb
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase EjeEducacionTablaWeb
 */
class EjeEducacionTablaWeb extends EjeEducacion implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $educacion;
    // protected $preparado;
    protected $tabla;
    const     IDENTIFICADOR = 'TablaEducacion';

    /**
     * Preparar
     */
    protected function prepapar() {
        // Si ya está preparado, no hace nada
        if ($this->preparado) {
            return;
        }
        // Ejecutar método en el padre
        try {
            parent::prepapar();
        } catch (EjeExceptionSinDatos $e) {
            $this->tabla = new MensajeWeb();
            $this->tabla->definir_mensaje_aviso('', $e->getMessage());
            return;
        }
        // Preparar tabla
        $this->tabla = new TablaWeb(self::IDENTIFICADOR);
        $this->tabla->definir_estructura(
            array(
                'indicador' => array('enca' => 'Indicador'),
                'valor'     => array('enca' => 'Valor',    'clase' => 'derecha')
            )
        );
        $this->tabla->definir_panal(
            array(
                array('indicador' => 'Grado Promedio de Escolaridad',           'valor' => $this->formatear('Grado Promedio de Escolaridad')),
                array('indicador' => 'Grado Promedio de Escolaridad masculina', 'valor' => $this->formatear('Grado Promedio de Escolaridad masculina')),
                array('indicador' => 'Grado Promedio de Escolaridad femenina',  'valor' => $this->formatear('Grado Promedio de Escolaridad femenina'))
            )
        );
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        return $this->tabla->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        return $this->tabla->javascript();
    } // javascript

} // Clase EjeEducacionTablaWeb

?>
