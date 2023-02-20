<?php
/**
 * TrcIMPLAN Sitio Web - JuntosContraElCambioClimatico
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

namespace Blog;

/**
 * Clase JuntosContraElCambioClimatico
 */
class JuntosContraElCambioClimatico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Trabajando juntos contra el Cambio Climático';
        $this->autor                      = 'Arq. Olga Daniela Sánchez Valles';
        $this->fecha                      = '2023-02-20T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'juntos-contra-el-cambio-climatico-feb-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Mucho se ha hablado sobre el impacto que nuestras actividades humanas tienen sobre el medio ambiente, y como han generado consecuencias negativas que afectan nuestra calidad de vida, ya sea por traslados que se ven interrumpidos debido a las abundantes lluvias (se estimaron pérdidas de 300 millones de pesos en 2018), o el uso de aparatos refrescantes para lidiar con las altas temperaturas, que aumentarán 5 °C, y los efectos de isla de calor en nuestra ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, climatico, cambio';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/JuntosContraElCambioClimatico.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente');
        $this->fuentes                    = array('Conagua');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase JuntosContraElCambioClimatico

?>
