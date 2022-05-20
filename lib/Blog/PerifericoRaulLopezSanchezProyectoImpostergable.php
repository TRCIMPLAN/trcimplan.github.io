<?php
/**
 * TrcIMPLAN Sitio Web - PerifericoRaulLopezSanchezProyectoImpostergable
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
 * Clase PerifericoRaulLopezSanchezProyectoImpostergable
 */
class PerifericoRaulLopezSanchezProyectoImpostergable extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Periférico Raúl López Sánchez, proyecto impostergable. ';
        $this->autor                      = 'Arq. Estefanía Rodríguez Schott';
        $this->fecha                      = '2022-05-16T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'periferico-raul-lopez-sanchez-proy-impostergable-mayo-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la vida de las ciudades se encuentran problemáticas crecientes e incrementales, por falta de visión y planeación a largo plazo, por la aparición de nuevos factores, fenómenos o variables generando inoperancia, los cuales propician proyectos impostergables.';
        $this->claves                     = 'IMPLAN, Torreon, proyecto, periferico, planeacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PerifericoRaulLopezSanchezProyectoImpostergable.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PerifericoRaulLopezSanchezProyectoImpostergable

?>
