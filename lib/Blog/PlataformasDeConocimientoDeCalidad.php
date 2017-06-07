<?php
/**
 * TrcIMPLAN Sitio Web - PlataformasDeConocimientoDeCalidad
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
 * Clase PlataformasDeConocimientoDeCalidad
 */
class PlataformasDeConocimientoDeCalidad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plataformas de Conocimiento de Calidad';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2017-04-01T18:32';
        // El nombre del archivo a crear
        $this->archivo                    = 'plataformas-de-conocimiento-de-calidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Para que los datos abiertos sean pilares de un gobierno abierto deben ser divulgados en sitios web que vayan más allá de lo convencional; que sean plataformas de conocimiento, detonantes de una nueva cultura ciudadana y que se vuelvan herramientas amigables y precisas para monitorear las políticas públicas.';
        $this->claves                     = 'IMPLAN, Torreon, Plataformas, Conocimiento, Datos Abiertos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlataformasDeConocimientoDeCalidad.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Gobierno Digital');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Coahuila');
    } // constructor

} // Clase PlataformasDeConocimientoDeCalidad

?>
