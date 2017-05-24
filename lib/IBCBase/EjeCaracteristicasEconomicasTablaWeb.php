<?php
/**
 * TrcIMPLAN IBCBase - EjeCaracteristicasEconomicasTablaWeb
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
 * Clase EjeCaracteristicasEconomicasTablaWeb
 */
class EjeCaracteristicasEconomicasTablaWeb extends EjeCaracteristicasEconomicas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $caracteristicas_economicas;
    // protected $preparado;
    protected $tabla;
    const     IDENTIFICADOR = 'TablaCaracteristicasEconomicas';

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
                array('indicador' => 'Población Económicamente Activa',           'valor' => $this->formatear('Población Económicamente Activa')),
                array('indicador' => 'Población Económicamente Activa masculina', 'valor' => $this->formatear('Población Económicamente Activa masculina')),
                array('indicador' => 'Población Económicamente Activa femenina',  'valor' => $this->formatear('Población Económicamente Activa femenina')),
                array('indicador' => 'Población Ocupada',                         'valor' => $this->formatear('Población Ocupada')),
                array('indicador' => 'Población Ocupada masculina',               'valor' => $this->formatear('Población Ocupada masculina')),
                array('indicador' => 'Población Ocupada femenina',                'valor' => $this->formatear('Población Ocupada femenina')),
                array('indicador' => 'Población Desocupada',                      'valor' => $this->formatear('Población Desocupada')),
                array('indicador' => 'Derechohabiencia',                          'valor' => $this->formatear('Derechohabiencia'))
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

} // Clase EjeCaracteristicasEconomicasTablaWeb

?>
