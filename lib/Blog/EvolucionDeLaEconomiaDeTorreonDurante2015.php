<?php
/**
 * TrcIMPLAN Sitio Web - EvolucionDeLaEconomiaDeTorreonDurante2015
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
 * Clase EvolucionDeLaEconomiaDeTorreonDurante2015
 */
class EvolucionDeLaEconomiaDeTorreonDurante2015 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Evolución de la economía de Torreón durante 2015';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2016-04-06T10:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'evolucion-de-la-economia-de-torreon-durante-2015';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el 2015 el municipio presenta una disminución en la tasa de desempleo durante el último trimestre y una inflación mínima histórica de 1.7% anual, sin embargo fue un año de poco movimiento para los indicadores económicos de Torreón, Coahuila y La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Economia, 2015';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EvolucionDeLaEconomiaDeTorreonDurante2015.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Empleo', 'Empresas', 'Macroeconomía');
        $this->fuentes                    = array('INEGI', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase EvolucionDeLaEconomiaDeTorreonDurante2015

?>
