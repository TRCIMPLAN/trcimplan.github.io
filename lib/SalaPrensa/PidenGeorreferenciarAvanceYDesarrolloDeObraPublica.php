<?php
/**
 * TrcIMPLAN Sitio Web - PidenGeorreferenciarAvanceYDesarrolloDeObraPublica
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

namespace SalaPrensa;

/**
 * Clase PidenGeorreferenciarAvanceYDesarrolloDeObraPublica
 */
class PidenGeorreferenciarAvanceYDesarrolloDeObraPublica extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Piden georreferenciar avance y desarrollo de obra pública';
    //  $this->autor                      = '';
        $this->fecha                      = '2017-02-09T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-02-09-piden-georreferenciar-avance-y-desarrollo-de-obra-publica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Para enriquecer aún más la Plataforma del Conocimiento los regidores y síndicas que participan dentro de las comisiones de Planeación y Metropolitana del Cabildo de Torreón propusieron agregar una línea que permita georreferenciar el desarrollo de obras públicas.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/PidenGeorreferenciarAvanceYDesarrolloDeObraPublica.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Finanzas Públicas');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PidenGeorreferenciarAvanceYDesarrolloDeObraPublica

?>
