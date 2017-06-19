<?php
/**
 * TrcIMPLAN IBCBase - EjeDemografiaGraficasWeb
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
 * Clase EjeDemografiaGraficasWeb
 */
class EjeDemografiaGraficasWeb extends EjeDemografia implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $demografia;
    // protected $preparado;
    protected $graficas = array();
    const     ID_GRAF_POB_MAS_FEM      = 'GraficaPobMasFem';
    const     ID_GRAF_POB_RANG         = 'GraficaPobRango';
    const     ID_GRAF_POB_NAC_OTRO_EDO = 'GraficaPobNacOtroEdo';
    const     ID_GRAF_POB_DISC         = 'GraficaPobDisc';

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
        // Gráfica Población Masculina Femenina
        $graf_pob_mas_fem = new GraficaPayWeb(self::ID_GRAF_POB_MAS_FEM);
        $graf_pob_mas_fem->definir_titulo('Población por género');
        $graf_pob_mas_fem->agregar('Masculina', $this->demografia['Porcentaje de población masculina'], '#006AC8');
        $graf_pob_mas_fem->agregar('Femenina',  $this->demografia['Porcentaje de población femenina'],  '#C80083');
        $this->graficas[] = $graf_pob_mas_fem;
        // Gráfica Población Rangos
        $graf_pob_rang = new GraficaPayWeb(self::ID_GRAF_POB_RANG);
        $graf_pob_rang->definir_titulo('Población por rangos de edad');
        $graf_pob_rang->agregar('De 0 a 14 años',   $this->demografia['Porcentaje de población de 0 a 14 años'],   '#89BE85');
        $graf_pob_rang->agregar('De 15 a 64 años',  $this->demografia['Porcentaje de población de 15 a 64 años'],  '#57A550');
        $graf_pob_rang->agregar('De 65 y más años', $this->demografia['Porcentaje de población de 65 y más años'], '#15630E');
        $graf_pob_rang->agregar('No especificada',  $this->demografia['Porcentaje de población no especificada'],  '#BFBFBF');
        $this->graficas[] = $graf_pob_rang;
        // Gráfica Población Nacida en Otro Estado
    //  $graf_pob_nac_otro_edo = new GraficaPayWeb(self::ID_GRAF_POB_NAC_OTRO_EDO);
    //  $graf_pob_nac_otro_edo->definir_titulo('Nacida en otro estado');
    //  $graf_pob_nac_otro_edo->agregar('Nacida en OTRO estado',       $this->demografia['Porcentaje de población nacida en otro estado'], '#7E00A8');
    //  $graf_pob_nac_otro_edo->agregar('Nacida en este estado', 100 - $this->demografia['Porcentaje de población nacida en otro estado'], '#BFBFBF');
    //  $this->graficas[] = $graf_pob_nac_otro_edo;
        // Gráfica Población con Discapacidad
        $graf_pob_disc = new GraficaPayWeb(self::ID_GRAF_POB_DISC);
        $graf_pob_disc->definir_titulo('Con discapacidad');
        $graf_pob_disc->agregar('CON discapacidad',       $this->demografia['Porcentaje de población con discapacidad'], '#A80021');
        $graf_pob_disc->agregar('Sin discapacidad', 100 - $this->demografia['Porcentaje de población con discapacidad'], '#BFBFBF');
        $this->graficas[] = $graf_pob_disc;
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

} // Clase EjeDemografiaGraficasWeb

?>
