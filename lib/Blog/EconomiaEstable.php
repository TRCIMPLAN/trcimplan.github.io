<?php
/**
 * TrcIMPLAN Sitio Web - Economía Estable
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
 * Clase EconomiaEstable
 */
class EconomiaEstable extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Economía Estable';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-06-24T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'economia-estable';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de las variables macroeconómicas como crédito, mercado hipotecario, cartera vencida, PIB y desempleo.';
        $this->claves                     = 'IMPLAN, Torreon, Macroeconomia, Credito, Mercado, Hipotecario, Cartera Vencida, PIB, Desempleo';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/EconomiaEstable.html';
        // Para el Organizador
        $this->categorias                 = array('Macroeconomía', 'Empleo', 'Empresas');
        $this->fuentes                    = array('Comisión Nacional Bancaria y de Valores (CNBV)', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EconomiaEstable

?>
