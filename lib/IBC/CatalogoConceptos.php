<?php
/**
 * TrcIMPLAN Sitio Web - Catálogo de Conceptos
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
 * Clase CatalogoConceptos
 */
class CatalogoConceptos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Catálogo de Conceptos';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2016-12-07T15:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'catalogo-conceptos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Descripción de lo representa cada Indicador Básico por Colonia.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Basicos, Colonias, Catalogo, Conceptos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Indicadores Básicos por Colonias';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/IBC/CatalogoConceptos.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
    } // constructor

} // Clase CatalogoConceptos

?>
