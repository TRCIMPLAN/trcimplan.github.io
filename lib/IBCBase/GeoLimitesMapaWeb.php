<?php
/**
 * TrcIMPLAN IBCBase - GeoLimitesMapaWeb
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
 * Clase GeoLimitesMapaWeb
 */
class GeoLimitesMapaWeb extends GeoLimites implements SalidaWeb {

    // protected $publicacion_ficha;
    // protected $nombre;
    // protected $limites;
    // protected $centro_longitud;
    // protected $centro_latitud;
    // protected $preparado;
    protected $salida;
    const     ID_MAPA_LIMITES = 'MapaLimites';

    /**
     * Preparar
     */
    protected function prepapar() {
        // Si ya está preparado, no hace nada
        if ($this->preparado) {
            return;
        }
        // Ejecutar preparar en el padre, si falla mostrará un mensaje
        try {
            parent::prepapar();
        } catch (GeoExceptionSinDatos $e) {
            $mensaje = new MensajeWeb();
            $mensaje->definir_mensaje_aviso('', $e->getMessage());
            $this->salida = $mensaje;
            return;
        }
        // Mapa límites
        $this->salida = new MapaWeb(self::ID_MAPA_LIMITES);
        $this->salida->definir_carto_json($this->limites);
        $this->salida->definir_nombre($this->nombre);
        $this->salida->definir_centro($this->centro_longitud, $this->centro_latitud);
    } // preparar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $this->prepapar();
        return $this->salida->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $this->prepapar();
        return $this->salida->javascript();
    } // javascript

} // Clase GeoLimitesMapaWeb

?>
