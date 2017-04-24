<?php
/**
 * TrcIMPLAN Sitio Web - FirmaConvenioColaboracionUAdeC
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * Clase FirmaConvenioColaboracionUAdeC
 */
class FirmaConvenioColaboracionUAdeC extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El IMPLAN y la Escuela de Arquitectura de la UAC firman convenio de colaboración';
    //  $this->autor                      = '';
        $this->fecha                      = '2016-12-15T12:43';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-12-15-firma-convenio-colaboracion-uadec';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Escuela de Arquitectura de la Universidad Autónoma de Coahuila (UAC) cuenta con 270 alumnos inscritos. Los que cursan a partir del sexto semestre podrán prestar 480 horas de servicio social en esta institución.';
        $this->claves                     = 'IMPLAN, Torreon, UAC, Convenio, Arquitectura';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/FirmaConvenioColaboracionUAdeC.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase FirmaConvenioColaboracionUAdeC

?>
