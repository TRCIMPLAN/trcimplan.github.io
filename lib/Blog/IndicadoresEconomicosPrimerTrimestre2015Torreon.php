<?php
/**
 * TrcIMPLAN Sitio Web - Indicadores Económicos del primer trimestre de 2015 para el Municipio de Torreón
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
 * Clase IndicadoresEconomicosPrimerTrimestre2015Torreon
 */
class IndicadoresEconomicosPrimerTrimestre2015Torreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Indicadores Económicos del primer trimestre de 2015 para el Municipio de Torreón';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2015-05-20T12:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'indicadores-economicos-primer-trimestre-2015-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de los indicadores de inflación, apertura de empresas, trabajadores asegurados y salario promedio para el municipio de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Inflacion, Apertura, Empresas, Trabajadores, Asegurados, Salario, Promedio';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IndicadoresEconomicosPrimerTrimestre2015Torreon.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Empresas', 'Mercados');
        $this->fuentes                    = array('INEGI', 'IMSS Subdelegación Torreón', 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
        $this->regiones                   = array('Torreón', 'Nacional');
    } // constructor

} // Clase IndicadoresEconomicosPrimerTrimestre2015Torreon

?>
