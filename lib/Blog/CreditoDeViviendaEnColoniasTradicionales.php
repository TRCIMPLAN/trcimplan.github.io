<?php
/**
 * TrcIMPLAN Sitio Web - CreditoDeViviendaEnColoniasTradicionales
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
 * Clase CreditoDeViviendaEnColoniasTradicionales
 */
class CreditoDeViviendaEnColoniasTradicionales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Créditos de Vivienda en Colonias Tradicionales como Estrategia para la Consolidación Urbana';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2019-12-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'credito-de-vivienda-en-colonias-tradicionales-dic2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Del 2018 al 2019 la demanda de vivienda usada ha superado en un 5.6 % a la vivienda nueva en el Municipio de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, vivienda, Creditos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CreditoDeViviendaEnColoniasTradicionales.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array('INEGI','HABITAT','SEDESOL');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CreditoDeViviendaEnColoniasTradicionales

?>
