<?php
/**
 * TrcIMPLAN SMIBase - SeccionOtrasRegionesWeb
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
 * Clase SeccionOtrasRegionesWeb
 */
class SeccionOtrasRegionesWeb implements SalidaWeb {

    protected $publicacion;                            // Instancia de PublicacionWeb
    protected $grafica;                                // Instancia de GraficaBarrasWeb
    protected $tabla;                                  // Instancia de TablaWeb
    protected $preparado   = FALSE;                    // Bandera
    const     GRAFICA_ID   = 'OtrasRegionesIndicador'; // Identificador único para la gráfica

    /**
     * Constructor
     *
     * @param mixed Instancia de PublicacionWeb
     */
    public function __construct(PublicacionWeb $publicacion) {
        $this->publicacion = $publicacion;
    } // constructor

    /**
     * Preparar
     */
    private function preparar() {
        if (!$this->preparado) {
            // Si la publicación tiene datos de otras regiones
            if (is_array($this->publicacion->otras_regiones())) {
                // Definir identificador único para la gráfica
                $identificador = UtileriasParaFormatos::caracteres_para_clase('SMI Otras Regiones '.$this->publicacion->nombre);
                // Preparar la gráfica
                $this->grafica = new GraficaBarrasWeb($identificador.'Grafica');
                $this->grafica->definir_clave_x('region');
                $this->grafica->definir_claves_y('dato', 'Dato', '#FF5B02');
                foreach ($this->publicacion->otras_regiones() as $or) {
                    $this->grafica->agregar_datos($or['region_nombre'], $or['valor']);
                }
                // Preparar la tabla
                $this->tabla = new TablaWeb($identificador.'Tabla');
                $this->tabla->definir_estructura($this->publicacion->otras_regiones_estructura());
                $this->tabla->definir_panal($this->publicacion->otras_regiones());
                $this->tabla->deshabilitar_datatables();
            } else {
                throw new GraficaExceptionSinValores("Aviso en SeccionOtrasRegionesWeb: NO se tienen datos de otras regiones.");
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
            $encabezado = "    <h3>Últimos datos de {$this->publicacion->nombre}</h3>";
            return "$encabezado\n{$this->grafica->html()}\n{$this->tabla->html()}";
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
            $tabla_js = $this->tabla->javascript();
            if ($tabla_js === NULL) {
                return $this->grafica->javascript();
            } else {
                return $this->grafica->javascript()."\n".$this->tabla->javascript();
            }
        } catch (GraficaExceptionSinValores $e) {
            return NULL;
        }
    } // javascript

} // Clase SeccionOtrasRegionesWeb

?>
