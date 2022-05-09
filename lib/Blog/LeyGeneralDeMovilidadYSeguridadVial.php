<?php
/**
 * TrcIMPLAN Sitio Web - LeyGeneralDeMovilidadYSeguridadVial
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
 * Clase LeyGeneralDeMovilidadYSeguridadVial
 */
class LeyGeneralDeMovilidadYSeguridadVial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '¿Qué implica la Ley General de Movilidad y Seguridad Vial?';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2022-05-09T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'ley-general-de-movilidad-y-seguridad-vial-mayo-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El pasado octubre de 2021 dio inicio el Plan Mundial para Decenio de Acción para la Seguridad Vial 2021-2030 con el objetivo de reducir el 50% de las muertes y traumatismos causados por los accidentes de tránsito.';
        $this->claves                     = 'IMPLAN, Torreon, movilidad, vial, seguridad, transito';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LeyGeneralDeMovilidadYSeguridadVial.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array('OMS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LeyGeneralDeMovilidadYSeguridadVial

?>
