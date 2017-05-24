<?php
/**
 * TrcIMPLAN IBCBase - EjeEducacionGraficasWeb
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
 * Clase EjeEducacionGraficasWeb
 */
class EjeEducacionGraficasWeb extends EjeEducacion implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $educacion;
    // protected $preparado;
    protected $grafica;
    const     ID_GRAF_PROM_ESC = 'GraficaPromEsc';

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
        // Gráfica Grado Promedio de Escolaridad
        $this->grafica = new GraficaBarrasWeb(self::ID_GRAF_PROM_ESC);
        $this->grafica->definir_titulo('Grado Promedio de Escolaridad');
        $this->grafica->agregar('Global', $this->educacion['Grado Promedio de Escolaridad'], '');
        $this->grafica->agregar('Masculina', $this->educacion['Grado Promedio de Escolaridad masculina'], '#006AC8');
        $this->grafica->agregar('Femenina', $this->educacion['Grado Promedio de Escolaridad femenina'], '#C80083');
        $this->grafica->definir_eje_horizontal('Años', 0, 24);
        $this->grafica->definir_post_nota(' años');
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

} // Clase EjeEducacionGraficasWeb

?>
