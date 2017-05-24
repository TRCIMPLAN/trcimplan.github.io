<?php
/**
 * TrcIMPLAN IBCBase - EjeViviendasGraficasWeb
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
 * Clase EjeViviendasGraficasWeb
 */
class EjeViviendasGraficasWeb extends EjeViviendas implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $viviendas;
    // protected $preparado;
    protected $graficas = array();
    const     ID_GRAF_HOG_JEF = 'GraficaHogJef';
    const     ID_GRAF_VIV_CON = 'GraficaVivCon';

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
        // Gráfica Hogares Jefatura
    //  $graf_hog_jef = new GraficaPayWeb(self::ID_GRAF_HOG_JEF);
    //  $graf_hog_jef->definir_titulo('Hogares con jefatura...');
    //  $graf_hog_jef->agregar('Masculina', $this->viviendas['Hogares Jefatura masculina'], '#006AC8');
    //  $graf_hog_jef->agregar('Femenina',  $this->viviendas['Hogares Jefatura femenina'],  '#C80083');
    //  $this->graficas[] = $graf_hog_jef;
        // Gráfica Viviendas con...
        $graf_viv_con = new GraficaBarrasWeb(self::ID_GRAF_VIV_CON);
        $graf_viv_con->definir_titulo('Viviendas con...');
        $graf_viv_con->agregar('Electricidad', $this->viviendas['Viviendas con Electricidad'], '#C080FF');
        $graf_viv_con->agregar('Agua',         $this->viviendas['Viviendas con Agua'],         '#80C0FF');
        $graf_viv_con->agregar('Drenaje',      $this->viviendas['Viviendas con Drenaje'],      '#59BFC3');
        $graf_viv_con->agregar('Televisión',   $this->viviendas['Viviendas con Televisión'],   '#59C38E');
        $graf_viv_con->agregar('Automóvil',    $this->viviendas['Viviendas con Automóvil'],    '#8EC359');
        $graf_viv_con->agregar('Computadora',  $this->viviendas['Viviendas con Computadora'],  '#C38E59');
    //  $graf_viv_con->agregar('Celular',      $this->viviendas['Viviendas con Celular'],      '#FF8080');
    //  $graf_viv_con->agregar('Internet',     $this->viviendas['Viviendas con Internet'],     '#FF80C0');
        $graf_viv_con->definir_eje_horizontal('Porcentaje', 0, 100);
        $graf_viv_con->definir_post_nota(' %');
        $this->graficas[] = $graf_viv_con;
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

} // Clase EjeViviendasGraficasWeb

?>
