<?php
/**
 * TrcIMPLAN Sitio Web - LaSociedadDelDesempeno
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
 * Clase LaSociedadDelDesempeno
 */
class LaSociedadDelDesempeno extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La sociedad del desempeño';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2019-11-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-sociedad-del-desempeno-nov2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 58% de los mexicanos mayores de 12 años quisiera tener más tiempo para hacer lo que realmente les gusta.';
        $this->claves                     = 'IMPLAN, Torreon, nom035, trabajo, estres laboral';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaSociedadDelDesempeno.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Bienestar');
        $this->fuentes                    = array('OCDE','INEGI', 'IMSS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaSociedadDelDesempeno

?>
