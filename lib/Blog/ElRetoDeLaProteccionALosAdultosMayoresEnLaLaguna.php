<?php
/**
 * TrcIMPLAN Sitio Web - ElRetoDeLaProteccionALosAdultosMayoresEnLaLaguna
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
 * Clase ElRetoDeLaProteccionALosAdultosMayoresEnLaLaguna
 */
class ElRetoDeLaProteccionALosAdultosMayoresEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El reto de la protección a los adultos mayores en La Laguna';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2016-02-09T15:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-reto-de-la-proteccion-a-los-adultos-mayores-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El crecimiento de las personas de la tercera edad se refleja cada vez más en la Comarca Lagunera, en 2015 la población de 65 años era de 86,385 personas y se estima que para 2020 será de 104,688.';
        $this->claves                     = 'IMPLAN, Torreon, Adultos, Mayores, Tercera Edad';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElRetoDeLaProteccionALosAdultosMayoresEnLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Grupos Vulnerables', 'Salud');
        $this->fuentes                    = array('CONAPO', 'INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase ElRetoDeLaProteccionALosAdultosMayoresEnLaLaguna

?>
