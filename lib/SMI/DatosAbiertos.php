<?php
/**
 * TrcIMPLAN - SMI Datos Abiertos (Creado por Central:SmiLanzadera)
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
 * Clase DatosAbiertos
 */
class DatosAbiertos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Datos Abiertos del Sistema Metropolitano de Indicadores';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2015-11-08T23:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'datos-abiertos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Descargar los datos abiertos del Sistema Metropolitano de Indicadores.';
        $this->claves                     = 'IMPLAN, Torreon, Datos Abiertos, Indicadores';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Indicadores > Datos Abiertos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SMI/DatosAbiertos.md';
        // Banderas que pueden tener un valor por defecto en \Configuracion\PublicacionConfig
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = true;
    } // constructor

} // Clase DatosAbiertos

?>
