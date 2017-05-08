<?php
/**
 * TrcIMPLAN Sitio Web - Avances Del Proyecto Calle Completa
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
 * Clase AvancesDelProyectoCalleCompleta
 */
class AvancesDelProyectoCalleCompleta extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN presenta avances del proyecto “Calle Completa”';
    //  $this->autor                      = '';
        $this->fecha                      = '2015-09-25T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-09-25-avances-del-proyecto-calle-completa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Es un modelo de vialidades integrales donde toman en cuenta todos los actores del espacio público.';
        $this->claves                     = 'IMPLAN, Torreon, Sesion, Consejo, Calle Completa';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/AvancesDelProyectoCalleCompleta.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Movilidad', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase AvancesDelProyectoCalleCompleta

?>
