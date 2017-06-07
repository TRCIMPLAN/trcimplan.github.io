<?php
/**
 * TrcIMPLAN Sitio Web - Catálogo de Conceptos
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
 * Clase CatalogoConceptos
 */
class CatalogoConceptos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Catálogo de Conceptos';
        $this->fecha                      = '2017-05-29T08:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'catalogo-conceptos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Descripción de lo representa cada Indicador Básico de Colonia.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Basicos, Colonias, Catalogo, Conceptos';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Indicadores Básicos de Colonias > Catálogo de Conceptos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/IBC/CatalogoConceptos.md';
    } // constructor

} // Clase CatalogoConceptos

?>
