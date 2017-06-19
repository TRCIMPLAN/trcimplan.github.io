<?php
/**
 * TrcIMPLAN IBCBase - EjeViviendasTablaWeb
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
 * Clase EjeViviendasTablaWeb
 */
class EjeViviendasTablaWeb extends EjeViviendas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $viviendas;
    // protected $preparado;
    protected $tabla;
    const     IDENTIFICADOR = 'TablaViviendas';

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
                array('indicador' => 'Hogares',                        'valor' => $this->formatear('Hogares')),
            //  array('indicador' => 'Hogares con jefatura masculina', 'valor' => $this->formatear('Hogares Jefatura masculina')),
            //  array('indicador' => 'Hogares con jefatura femenina',  'valor' => $this->formatear('Hogares Jefatura femenina')),
                array('indicador' => 'Viviendas con Electricidad',     'valor' => $this->formatear('Viviendas con Electricidad')),
                array('indicador' => 'Viviendas con Agua',             'valor' => $this->formatear('Viviendas con Agua')),
                array('indicador' => 'Viviendas con Drenaje',          'valor' => $this->formatear('Viviendas con Drenaje')),
                array('indicador' => 'Viviendas con Televisión',       'valor' => $this->formatear('Viviendas con Televisión')),
                array('indicador' => 'Viviendas con Automóvil',        'valor' => $this->formatear('Viviendas con Automóvil')),
                array('indicador' => 'Viviendas con Computadora',      'valor' => $this->formatear('Viviendas con Computadora'))
            //  array('indicador' => 'Viviendas con Celular',          'valor' => $this->formatear('Viviendas con Celular')),
            //  array('indicador' => 'Viviendas con Internet',         'valor' => $this->formatear('Viviendas con Internet'))
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

} // Clase EjeViviendasTablaWeb

?>
