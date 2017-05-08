<?php
/**
 * TrcIMPLAN Sitio Web - Presentacion Plan Estrategico Torreon con vision metropolitana 2040
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
 * Clase PresentacionPlanEstrategicoTorreonConVisionMetropolitana2040
 */
class PresentacionPlanEstrategicoTorreonConVisionMetropolitana2040 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presentación del Plan Estratégico Torreón con visión metropolitana 2040';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-11-29T13:40';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-11-29-presentacion-trc2040';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El IMPLAN Torreón, llevó a cabo este martes la presentación del Plan Estratégico para Torreón Enfoque Metropolitano (TRC2040), en las instalaciones del ITESM Campus Laguna, con la asistencia de más de 200 personas, entre los que se encontraron ciudadanos representantes de distintos sectores de la sociedad, así como funcionarios públicos.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/PresentacionPlanEstrategicoTorreonConVisionMetropolitana2040.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PresentacionPlanEstrategicoTorreonConVisionMetropolitana2040

?>
