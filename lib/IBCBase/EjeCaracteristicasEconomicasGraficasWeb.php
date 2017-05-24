<?php
/**
 * TrcIMPLAN IBCBase - EjeCaracteristicasEconomicasGraficasWeb
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
 * Clase EjeCaracteristicasEconomicasGraficasWeb
 */
class EjeCaracteristicasEconomicasGraficasWeb extends EjeCaracteristicasEconomicas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $caracteristicas_economicas;
    // protected $preparado;
    protected $graficas = array();
    const     ID_GRAF_POB_ECO_ACT         = 'GraficaPobEcoAct';
    const     ID_GRAF_POB_ECO_ACT_MAS_FEM = 'GraficaPobEcoActMasFem';
    const     ID_GRAF_OCU                 = 'GraficaOcu';
    const     ID_GRAF_OCU_MAS_FEM         = 'GraficaOcuMasFem';
    const     ID_GRAF_DERECHOHABIENCIA    = 'GraficaDerechohabiencia';

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
            $this->graficas[] = $mensaje;
            return;
        }
        // Grafica Población Económicamente Activa
        $graf_pob_eco_act = new GraficaPayWeb(self::ID_GRAF_POB_ECO_ACT);
        $graf_pob_eco_act->definir_titulo('Población Económicamente Activa');
        $graf_pob_eco_act->agregar('Activa',          $this->caracteristicas_economicas['Población Económicamente Activa'], '#7E00A8');
        $graf_pob_eco_act->agregar('NO Activa', 100 - $this->caracteristicas_economicas['Población Económicamente Activa'], '#BFBFBF');
        $this->graficas[] = $graf_pob_eco_act;
        // Grafica Población Económicamente Activa por género
        $graf_pob_eco_act_mas_fem = new GraficaPayWeb(self::ID_GRAF_POB_ECO_ACT_MAS_FEM);
        $graf_pob_eco_act_mas_fem->definir_titulo('Población Económicamente Activa por género');
        $graf_pob_eco_act_mas_fem->agregar('Masculina', $this->caracteristicas_economicas['Población Económicamente Activa masculina'], '#006AC8');
        $graf_pob_eco_act_mas_fem->agregar('Femenina',  $this->caracteristicas_economicas['Población Económicamente Activa femenina'],  '#C80083');
        $this->graficas[] = $graf_pob_eco_act_mas_fem;
        // Grafica Población Ocupada
        $graf_pob_ocu = new GraficaPayWeb(self::ID_GRAF_OCU);
        $graf_pob_ocu->definir_titulo('Población Ocupada');
        $graf_pob_ocu->agregar('Ocupada',    $this->caracteristicas_economicas['Población Ocupada'],    '#A8001E');
        $graf_pob_ocu->agregar('Desocupada', $this->caracteristicas_economicas['Población Desocupada'], '#BFBFBF');
        $this->graficas[] = $graf_pob_ocu;
        // Grafica Población Ocupada por género
        $graf_pob_ocu_mas_fem = new GraficaPayWeb(self::ID_GRAF_OCU_MAS_FEM);
        $graf_pob_ocu_mas_fem->definir_titulo('Población Ocupada por género');
        $graf_pob_ocu_mas_fem->agregar('Masculina', $this->caracteristicas_economicas['Población Ocupada masculina'], '#006AC8');
        $graf_pob_ocu_mas_fem->agregar('Femenina',  $this->caracteristicas_economicas['Población Ocupada femenina'],  '#C80083');
        $this->graficas[] = $graf_pob_ocu_mas_fem;
        // Grafica Derechohabiencia
        $graf_derechohabiencia = new GraficaPayWeb(self::ID_GRAF_DERECHOHABIENCIA);
        $graf_derechohabiencia->definir_titulo('Derechohabiencia');
        $graf_derechohabiencia->agregar('Con Derechohabiencia',       $this->caracteristicas_economicas['Derechohabiencia'], '#00A898');
        $graf_derechohabiencia->agregar('SIN Derechohabiencia', 100 - $this->caracteristicas_economicas['Derechohabiencia'], '#BFBFBF');
        $this->graficas[] = $graf_derechohabiencia;
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        $a = array();
        foreach ($this->graficas as $g) {
            $a[] = $g->html();
        }
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        $a = array();
        foreach ($this->graficas as $g) {
            $js = $g->javascript();
            if (is_string($js) && ($js != '')) {
                $a[] = $js;
            }
        }
        if (count($a) > 0) {
            return implode("\n", $a);
        } else {
            return NULL;
        }
    } // javascript

} // Clase EjeCaracteristicasEconomicasGraficasWeb

?>
