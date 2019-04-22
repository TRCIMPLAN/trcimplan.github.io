<?php
/**
 * TrcIMPLAN Sitio Web - LaLagunaYSusOds
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
 * Clase LaLagunaYSusOds
 */
class LaLagunaYSusOds extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Laguna y sus indicadores de desarrollo urbano sostenible';
        $this->autor                      = 'Arq. Cecilio Secunza Schott';
        $this->fecha                      = '2019-04-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-laguna-y-sus-ods-abril2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Agenda 2030 y sus Objetivos de Desarrollo Sostenible (ODS) son 17 propósitos de escala global propuestos por la Organización de las Naciones Unidas (ONU) en 2015. Pretenden incidir en 3 temas principales: erradicación de la pobreza extrema, protección del planeta y prosperidad para todos (ONU, 2015).';
        $this->claves                     = 'IMPLAN, Torreon, desarrollo sostenible, agenda 2030, ods, pobreza extrema';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaLagunaYSusOds.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Bienestar','Poblacion');
        $this->fuentes                    = array('ONU');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaLagunaYSusOds

?>
