<?php
/**
 * Sitio Web - Plan 2040: La visión ciudadana para el futuro de la Laguna
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace SalaPrensa;

/**
 * Clase Plan2040LaVisionCiudadanaParaElFuturoDeLaLaguna
 */
class Plan2040LaVisionCiudadanaParaElFuturoDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plan 2040: La visión ciudadana para el futuro de la Laguna';
    //  $this->autor                      = '';
        $this->fecha                      = '2016-06-14T13:50';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-06-14-plan-2040-la-vision-ciudadana-para-el-futuro-de-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con una esencia fundamentalmente ciudadana, el Plan Estratégico Torreón con Visión Metropolitana reúne el diagnóstico, proyecciones y visión a futuro para nuestra ciudad y la Laguna en los próximos 25 años.';
        $this->claves                     = 'IMPLAN, Torreon, Plan Torreon, Vision Metropolitana, Diagnostico, Proyecciones, Futuro';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/Plan2040LaVisionCiudadanaParaElFuturoDeLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase Plan2040LaVisionCiudadanaParaElFuturoDeLaLaguna

?>
