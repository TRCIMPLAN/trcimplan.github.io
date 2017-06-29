<?php
/**
 * TrcIMPLAN SMIBase - SeccionGraficasWeb
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

namespace SMIBase;

/**
 * Clase SeccionGraficasWeb
 */
class SeccionGraficasWeb implements SalidaWeb {

    protected $publicacion;       // Instancia de PublicacionWeb
    protected $fuente_nombre;     // Texto, nombre de la fuente a filtrar
    protected $grafica;           // Instancia de GraficaLineasWeb
    protected $preparado = FALSE; // Bandera

    /**
     * Constructor
     *
     * @param mixed  Instancia de PublicacionWeb
     * @param string Fuente
     */
    public function __construct(PublicacionWeb $in_publicacion, $in_fuente_nombre = NULL) {
        $this->publicacion   = $in_publicacion;
        $this->fuente_nombre = $in_fuente_nombre;
    } // constructor

    /**
     * Preparar
     */
    private function preparar() {
        if (!$this->preparado) {
            // Definir identificador único para la gráfica
            if ($this->fuente_nombre === NULL) {
                $identificador = UtileriasParaFormatos::caracteres_para_clase('SMI Graficas '.$this->publicacion->nombre);
            } else {
                $identificador = UtileriasParaFormatos::caracteres_para_clase('SMI Graficas '.$this->publicacion->nombre.' '.$this->fuente_nombre);
            }
            // Preparar gráfica
            $this->grafica = new GraficaLineasWeb($identificador);
            $this->grafica->definir_clave_x('fecha');
            $this->grafica->definir_claves_y('dato', 'Dato', '#FF5B02');
            foreach ($this->publicacion->datos() as $d) {
                if ($this->fuente_nombre === NULL) {
                    $this->grafica->agregar_datos($d['fecha'], $d['valor']);
                } elseif ($this->fuente_nombre == $d['fuente_nombre']) {
                    $this->grafica->agregar_datos($d['fecha'], $d['valor']);
                }
            }
            // Levantar la bandera
            $this->preparado = TRUE;
        }
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        try {
            $this->preparar();
            if ($this->fuente_nombre === NULL) {
                $encabezado = "    <h3>{$this->publicacion->nombre} </h3>\n";
            } else {
                $encabezado = "    <h3>{$this->publicacion->nombre} con fuente {$this->fuente_nombre}</h3>\n";
            }
            return "$encabezado\n{$this->grafica->html()}";
        } catch (GraficaExceptionSinValores $e) {
        /*  $mensaje_web = new MensajeWeb();
            $mensaje_web->definir_mensaje_aviso('Aviso', $e->getMessage());
            return $mensaje_web->html(); */
            return NULL;
        }
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        try {
            $this->preparar();
            return $this->grafica->javascript();
        } catch (GraficaExceptionSinValores $e) {
            return NULL;
        }
    } // javascript

} // Clase SeccionGraficasWeb

?>
