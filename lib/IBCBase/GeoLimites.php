<?php
/**
 * TrcIMPLAN IBCBase - GeoLimites
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
 * Clase abstracta GeoLimites
 */
abstract class GeoLimites extends Geo {

    // protected $publicacion_ficha;
    protected $nombre;
    protected $limites;
    protected $centro_longitud;
    protected $centro_latitud;
    protected $preparado = FALSE;    // Bandera

    /**
     * Preparar
     */
    protected function prepapar() {
        // Si ya está preparado, no hace nada
        if ($this->preparado) {
            return;
        }
        // Definir el nombre
        $this->nombre = $this->publicacion_ficha->nombre;
        // Que tenga el método mapas
        if (method_exists($this->publicacion_ficha, 'mapas')) {
            $mapas = $this->publicacion_ficha->mapas();
            // Es necesario que tenga Límites
            if (isset($mapas['Límites'])) {
                $this->limites = $mapas['Límites'];
                // Opcionales
                if (isset($mapas['Centro longitud'])) {
                    $this->centro_longitud = $mapas['Centro longitud'];
                }
                if (isset($mapas['Centro latitud'])) {
                    $this->centro_latitud = $mapas['Centro latitud'];
                }
            } else {
                throw new GeoExceptionSinDatos("{$this->publicacion_ficha->nombre} sin mapa de límites.");
            }
        } else {
            throw new GeoExceptionSinDatos("{$this->publicacion_ficha->nombre} sin mapas.");
        }
        // Levantar bandera
        $this->preparado = TRUE;
    } // preparar

} // Clase abstracta GeoLimites

?>
