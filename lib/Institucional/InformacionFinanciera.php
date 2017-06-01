<?php
/**
 * TrcIMPLAN Sitio Web - Información Financiera
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

namespace Institucional;

/**
 * Clase InformacionFinanciera
 */
class InformacionFinanciera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Información Financiera';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-08-01T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo                    = 'informacion-financiera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '';
        $this->claves                     = 'IMPLAN, Torreon, Financiera';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Institucional > Información Financiera';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Institucional/InformacionFinanciera.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'ignorar';
    } // constructor

} // Clase InformacionFinanciera

?>
