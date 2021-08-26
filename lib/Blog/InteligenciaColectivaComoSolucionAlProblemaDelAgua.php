<?php
/**
 * TrcIMPLAN Sitio Web - InteligenciaColectivaComoSolucionAlProblemaDelAgua
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
 * Clase InteligenciaColectivaComoSolucionAlProblemaDelAgua
 */
class InteligenciaColectivaComoSolucionAlProblemaDelAgua extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Inteligencia colectiva como solución al problema del agua en la Comarca Lagunera';
        $this->autor                      = 'Arq. Estefanía Rodríguez Schott';
        $this->fecha                      = '2021-08-26T13:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'inteligencia-colectiva-como-solucion-al-problema-del-agua-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 17 de septiembre del 2020 CONAGUA declaró al acuífero principal de la Región Lagunera sin disponibilidad del recurso con -149,046 hectómetros cúbicos (hm³).';
        $this->claves                     = 'IMPLAN, Torreon, agua, acuifero, lagunera, comarca';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InteligenciaColectivaComoSolucionAlProblemaDelAgua.md';
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales', 'Servicios Públicos');
        $this->fuentes                    = array('CONAGUA');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase InteligenciaColectivaComoSolucionAlProblemaDelAgua

?>
