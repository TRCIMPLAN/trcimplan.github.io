<?php
/**
 * TrcIMPLAN Sitio Web - Aviso de Privacidad
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

namespace Terminos;

/**
 * Clase Privacidad
 */
class Privacidad extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Aviso de Privacidad';
    //~ $this->autor                      = '';
        $this->fecha                      = '2015-03-12T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'privacidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En cumplimiento a la Ley Federal de Protección de Datos Personales.';
        $this->claves                     = 'IMPLAN, Torreon, Aviso, Privacidad';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Términos de Uso > Aviso de Privacidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Terminos/Privacidad.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'publicar';
    } // constructor

} // Clase Privacidad

?>
