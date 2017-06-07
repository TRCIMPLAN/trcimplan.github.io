<?php
/**
 * TrcIMPLAN Sitio Web - La fuerza de las micro, pequeñas y medianas empresas en La Laguna
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
 * Clase LaFuerzaDeLasMicroPequenasYMedianasEmpresasEnLaLaguna
 */
class LaFuerzaDeLasMicroPequenasYMedianasEmpresasEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La fuerza de las micro, pequeñas y medianas empresas en La Laguna';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2016-03-01T11:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-fuerza-de-las-micro-pequenas-y-medianas-empresas-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la Comarca Lagunera contamos con 29 MiPyMes por cada 1000 habitantes. La densidad es menor que la del promedio nacional e internacional, que es de 36 y 31 por cada 1000 habitantes respectivamente. Este sector merece un impulso cada vez mayor dada su importante participación en la economía.';
        $this->claves                     = 'IMPLAN, Torreon, Micro, Pequeña, Mediana, Empresas, La Laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaFuerzaDeLasMicroPequenasYMedianasEmpresasEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Empleo', 'Innovación', 'Gobierno', 'Gobierno Digital');
        $this->fuentes                    = array('INEGI', 'Sistema de Información Empresarial Mexicano (SIEM)', 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaFuerzaDeLasMicroPequenasYMedianasEmpresasEnLaLaguna

?>
