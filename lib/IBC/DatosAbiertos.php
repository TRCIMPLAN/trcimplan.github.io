<?php
/**
 * TrcIMPLAN Sitio Web - IBC Datos Abiertos
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

namespace IBC;

/**
 * Clase DatosAbiertos
 */
class DatosAbiertos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Datos Abiertos de los Indicadores Básicos por Colonias';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2016-09-15T14:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'datos-abiertos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Descargar los datos abiertos de los Indicadores Básicos por Colonias.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Basicos, Colonias, Datos Abiertos, Descargar';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Indicadores Básicos por Colonias > Datos Abiertos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/IBC/DatosAbiertos.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
    } // constructor

} // Clase DatosAbiertos

?>
