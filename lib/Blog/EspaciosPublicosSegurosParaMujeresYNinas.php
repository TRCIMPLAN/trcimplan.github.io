<?php
/**
 * TrcIMPLAN Sitio Web - Espacios públicos seguros para mujeres y niñas
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

namespace Blog;

/**
 * Clase EspaciosPublicosSegurosParaMujeresYNinas
 */
class EspaciosPublicosSegurosParaMujeresYNinas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Espacios públicos seguros para mujeres y niñas';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2016-07-22T13:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'espacios-publicos-seguros-para-mujeres-y-ninas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón cuenta con más de 560 plazas públicas de libre tránsito, lugares donde se debe instalar un programa monitoreo social e implementar campañas que promuevan la denuncia y el respeto de los derechos de las mujeres y las niñas.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EspaciosPublicosSegurosParaMujeresYNinas.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Género', 'Población', 'Seguridad');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase EspaciosPublicosSegurosParaMujeresYNinas

?>
