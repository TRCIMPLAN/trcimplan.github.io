<?php
/**
 * Sitio Web - Presentan evaluación del impacto social y urbano de Ciudad DIF
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
 * Clase SesionOrdinaria20160831
 */
class SesionOrdinaria20160831 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presentan evaluación del impacto social y urbano de Ciudad DIF';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-08-31T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-08-31-sesion-ordinaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Octava Sesión Ordinaria del Consejo Directivo del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Sesion, Consejo Directivo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SesionOrdinaria20160831.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase SesionOrdinaria20160831

?>
