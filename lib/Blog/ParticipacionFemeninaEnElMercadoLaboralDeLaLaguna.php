<?php
/**
 * TrcIMPLAN Sitio Web - ParticipacionFemeninaEnElMercadoLaboralDeLaLaguna
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
 * Clase ParticipacionFemeninaEnElMercadoLaboralDeLaLaguna
 */
class ParticipacionFemeninaEnElMercadoLaboralDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Participación Femenina en el Mercado Laboral de La Laguna.';
        $this->autor                      = 'Lic. Carlos Andrés Chairez Ibarra';
        $this->fecha                      = '2022-04-11T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'participacion-femenina-en-el-mercado-laboral-abril-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo a la misma ENOE, la remuneración por día de las mujeres es de 256 pesos, en promedio, con 296.7 pesos en las áreas mas urbanizadas y 184 pesos en las zonas rurales, lo que representa una diferencia del 61.25%.';
        $this->claves                     = 'IMPLAN, Torreon, empleo, femenina, mujeres';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ParticipacionFemeninaEnElMercadoLaboralDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Género','Empleo');
        $this->fuentes                    = array('ENOE');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ParticipacionFemeninaEnElMercadoLaboralDeLaLaguna

?>
