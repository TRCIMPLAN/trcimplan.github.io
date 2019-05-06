<?php
/**
 * TrcIMPLAN - SMI NivelesSocioeconomicos (Creado por Central:SmiLanzadera)
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

namespace SMI;

/**
 * Clase NivelesSocioeconomicos
 */
class NivelesSocioeconomicos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Niveles Socioeconómicos de La Laguna';
        $this->fecha                      = '2019-05-05T23:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'niveles-socioeconomicos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Muestra los Niveles Socioeconómicos correspondientes a la Zona Metropolitana de La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, nivel socioeconomico, socioeconomico';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Indicadores > Niveles Socioeconómicos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SMI/NivelesSocioeconomicos.md';
    } // constructor

} // Clase NivelesSocioeconomicos

?>
