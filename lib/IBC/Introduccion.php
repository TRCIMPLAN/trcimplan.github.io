<?php
/**
 * TrcIMPLAN Sitio Web - IBC Introduccion
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

namespace IBC;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Introducción a los Indicadores Básicos por Colonias';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-06-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'introduccion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Introducción a los Indicadores Básicos por Colonias del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Basicos, Colonias';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Indicadores Básicos de Colonias > Introducción al IBC';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/IBC/Introduccion.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
    } // constructor

} // Clase Introduccion

?>