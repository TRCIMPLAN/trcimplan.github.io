<?php
/**
 * TrcIMPLAN Sitio Web - SeguridadVialYCalleCompleta
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
 * Clase SeguridadVialYCalleCompleta
 */
class SeguridadVialYCalleCompleta extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Seguridad vial, la Calle Completa como estrategia';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2021-03-02T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'seguridad-vial-y-calle-completa-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el municipio de Torreón en el año de 2019 ocurrieron 6,517 incidentes viales, que en promedio fueron 543 accidentes mensuales. Del total anual de accidentes, 162 fueron atropellos a ciclistas y 184 a peatones, siendo los choques entre automóviles el número más alto con 5,420.';
        $this->claves                     = 'IMPLAN, Torreon, seguridad vial, calle completa, vial, ciclistas, accidentes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SeguridadVialYCalleCompleta.md';
        // Para el Organizador
        $this->categorias                 = array('Vialidad', 'Movilidad');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SeguridadVialYCalleCompleta

?>
