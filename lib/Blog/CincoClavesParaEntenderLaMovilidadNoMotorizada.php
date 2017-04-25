<?php
/**
 * TrcIMPLAN Sitio Web - CincoClavesParaEntenderLaMovilidadNoMotorizada
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase CincoClavesParaEntenderLaMovilidadNoMotorizada
 */
class CincoClavesParaEntenderLaMovilidadNoMotorizada extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cinco Claves para entender la Movilidad No Motorizada';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2015-08-27T14:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'cinco-claves-para-entender-la-movilidad-no-motorizada';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los resultados del taller para ubicar los esfuerzos y principios que tienen que realizarse para poder implementar un sistema de movilidad no motorizada.';
        $this->claves                     = 'IMPLAN, Torreon, Movilidad, No Motorizada, Ciclistas, Peatones, Vehiculos, Transporte, Calles';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CincoClavesParaEntenderLaMovilidadNoMotorizada.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Movilidad');
        $this->fuentes                    = array('IMPLAN', 'Logit');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CincoClavesParaEntenderLaMovilidadNoMotorizada

?>
