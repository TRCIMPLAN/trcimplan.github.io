<?php
/**
 * TrcIMPLAN Sitio Web - CambioClimaticoCuentaRegresiva
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
 * Clase CambioClimaticoCuentaRegresiva
 */
class CambioClimaticoCuentaRegresiva extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cambio Climático, cuenta regresiva.';
        $this->autor                      = 'Ing. Ricardo Miranda Briones';
        $this->fecha                      = '2022-09-26T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'cambio-climatico-cuenta-regresiva-sep-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el Índice de Ciudades Sostenibles, el cual mide el avance de las zonas metropolitanas mexicanas hacia el cumplimiento de los Objetivos de Desarrollo Sostenible (ODS) y que es elaborado por distintas instituciones de prestigio a nivel nacional, se ubica a la ZML en el Objetivo 13 “Acción por el Clima” con un valor bajo de 36.7 sobre 100.';
        $this->claves                     = 'IMPLAN, Torreon, clima, climatico, sostenibles, ciudades';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CambioClimaticoCuentaRegresiva.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente');
        $this->fuentes                    = array('INECC');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CambioClimaticoCuentaRegresiva

?>
