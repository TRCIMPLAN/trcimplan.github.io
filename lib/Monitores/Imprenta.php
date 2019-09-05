<?php
/**
 * TrcIMPLAN Sitio Web - Imprenta
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

namespace Monitores;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio  = 'Monitores';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                    = 'Monitores';
        $this->descripcion               = 'Los monitores ayudan al usuario a entender el contenido presentando la información más relevante de manera clara.';
        $this->claves                    = 'IMPLAN, Torreon, Indicadores';
    //~ $this->encabezado_color          = '#FFFFFF';
        // Parámetros que el Recolector definirá en las Publicaciones si éstas no los tienen
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->aparece_en_pagina_inicial = TRUE;
        $this->para_compartir            = TRUE;
        $this->imagen                    = '../imagenes/imagen.jpg';
        $this->imagen_previa             = '../imagenes/imagen-previa-monitor.png';
        $this->poner_imagen_en_contenido = FALSE;
        $this->nombre_menu               = 'Monitores';
        // Ruta a la clase para hacer la página con el índice
        $this->indices_paginas           = '\\Base\\PaginasDetallados'; // Puede ser \Base\PaginasDetallados, \Base\PaginasGalerias, \Base\PaginasListado o \Base\PaginasTarjetas
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio                = 'monitores';
        // Nivel es el orden de la rama para los índices por autores y categorías, debe ser un entero grande
    //~ $this->nivel                     = 00000;
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
