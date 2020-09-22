<?php
/**
 * TrcIMPLAN Sitio Web - SuicidiosEnLaZML
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
 * Clase SuicidiosEnLaZML
 */
class SuicidiosEnLaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Registro de Suicidios en la Zona Metropolitana de La Laguna';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2020-09-22T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'suicidios-en-la-zml-sep-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“El suicidio es un problema complejo, en el que intervienen factores psicológicos, sociales, biológicos, culturales y ambientales.” (OMS, 2012)';
        $this->claves                     = 'IMPLAN, Torreon, suicidio, metropolitana, la laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SuicidiosEnLaZML.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('SUPRE','INEGI','OMS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SuicidiosEnLaZML

?>
