<?php
/**
 * TrcIMPLAN IBCBase - EjeUnidadesEconomicasGraficasWeb
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
 * Clase EjeUnidadesEconomicasGraficasWeb
 */
class EjeUnidadesEconomicasGraficasWeb extends EjeUnidadesEconomicas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $unidades_economicas;
    // protected $preparado;
    protected $grafica;
    const     ID_GRAF_UNI_ECO = 'GraficaUniEco';

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
            $mensaje = new MensajeWeb();
            $mensaje->definir_mensaje_aviso('', $e->getMessage());
            $this->grafica = $mensaje;
            return;
        }
        // Grafica Unidades Economicas
        $this->grafica = new GraficaBarrasWeb(self::ID_GRAF_UNI_ECO);
        $this->grafica->definir_titulo("{$this->unidades_economicas['Total Actividades Económicas']} Unidades Económicas");
        $this->grafica->agregar('1° '.$this->unidades_economicas['Primer actividad nombre'],  $this->unidades_economicas['Primer actividad porcentaje'],  '#59C38E');
        $this->grafica->agregar('2° '.$this->unidades_economicas['Segunda actividad nombre'], $this->unidades_economicas['Segunda actividad porcentaje'], '#8EC359');
        $this->grafica->agregar('3° '.$this->unidades_economicas['Tercera actividad nombre'], $this->unidades_economicas['Tercera actividad porcentaje'], '#C38E59');
        $this->grafica->agregar('4° '.$this->unidades_economicas['Cuarta actividad nombre'],  $this->unidades_economicas['Cuarta actividad porcentaje'],  '#80C0FF');
        $this->grafica->agregar('5° '.$this->unidades_economicas['Quinta actividad nombre'],  $this->unidades_economicas['Quinta actividad porcentaje'],  '#59BFC3');
        $this->grafica->definir_eje_horizontal('Porcentaje', 0);
        $this->grafica->definir_post_nota(' %');
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        return $this->grafica->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        return $this->grafica->javascript();
    } // javascript

} // Clase EjeUnidadesEconomicasGraficasWeb

?>
