<?php
/**
 * TrcIMPLAN Sitio Web - DiaInternacionalDelPeaton
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
 * Clase DiaInternacionalDelPeaton
 */
class DiaInternacionalDelPeaton extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Día Internacional del Peatón, seguridad y derechos.';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2021-08-19T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'dia-internacional-del-peaton-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 17 de agosto se celebra mundialmente el Día del Peatón, una fecha declarada por la Organización Mundial de la Salud (OMS) conmemorando el primer incidente de tráfico que cobrara la vida de una joven en Londres, Inglaterra.';
        $this->claves                     = 'IMPLAN, Torreon, peaton, salud, trafico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DiaInternacionalDelPeaton.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DiaInternacionalDelPeaton

?>