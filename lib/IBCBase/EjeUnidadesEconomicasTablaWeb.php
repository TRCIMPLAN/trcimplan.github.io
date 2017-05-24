<?php
/**
 * TrcIMPLAN IBCBase - EjeUnidadesEconomicasTablaWeb
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
 * Clase EjeUnidadesEconomicasTablaWeb
 */
class EjeUnidadesEconomicasTablaWeb extends EjeUnidadesEconomicas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $unidades_economicas;
    // protected $preparado;
    protected $tabla;
    const     IDENTIFICADOR = 'TablaUnidadesEconomicas';

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
                array('indicador' => 'Total Actividades Económicas',               'valor' => $this->formatear('Total Actividades Económicas')),
                array('indicador' => $this->formatear('Primer actividad nombre'),  'valor' => $this->formatear('Primer actividad porcentaje')),
                array('indicador' => $this->formatear('Segunda actividad nombre'), 'valor' => $this->formatear('Segunda actividad porcentaje')),
                array('indicador' => $this->formatear('Tercera actividad nombre'), 'valor' => $this->formatear('Tercera actividad porcentaje')),
                array('indicador' => $this->formatear('Cuarta actividad nombre'),  'valor' => $this->formatear('Cuarta actividad porcentaje')),
                array('indicador' => $this->formatear('Quinta actividad nombre'),  'valor' => $this->formatear('Quinta actividad porcentaje'))
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

} // Clase EjeUnidadesEconomicasTablaWeb

?>
