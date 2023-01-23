<?php
/**
 * TrcIMPLAN Sitio Web - IngresosLaboralesDeLaPoblacion
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
 * Clase IngresosLaboralesDeLaPoblacion
 */
class IngresosLaboralesDeLaPoblacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ingresos laborales de la población de Torreón ante el aumento en el salario mínimo.';
        $this->autor                      = 'Lic. Michelle Bañuelos Barrientos';
        $this->fecha                      = '2023-01-23T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'ingresos-laborales-de-la-poblacion-ene-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 1º. de enero del presente año entró en vigor la modificación propuesta sobre el incremento del salario mínimo general, el cual aumentaría pasando del monto de $172.87 a $207.44 pesos diarios.';
        $this->claves                     = 'IMPLAN, Torreon, salario, ingreso, minimo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IngresosLaboralesDeLaPoblacion.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('CONASAMI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IngresosLaboralesDeLaPoblacion

?>
