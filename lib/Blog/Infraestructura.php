<?php
/**
 * TrcIMPLAN Sitio Web - Infraestructura (Sectores precursores de clase mundial)
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
 * Clase Infraestructura
 */
class Infraestructura extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Infraestructura (Sectores precursores de clase mundial)';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-06-26T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'infraestructura';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de los indicadores sobre infraestructura en tecnologías de la información, carreteras avanzadas y tasa de accidentes viales.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Infraestructura, Información, TICs, Carreteras, Accidentes, Viales';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/Infraestructura.html';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vialidad', 'Movilidad');
        $this->fuentes                    = array('IMCO', 'INEGI', 'SCT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase Infraestructura

?>
