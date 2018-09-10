<?php
/**
 * TrcIMPLAN Sitio Web - ImpedimentosLaboralesDeLaMujerEnElAML
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
 * Clase ImpedimentosLaboralesDeLaMujerEnElAML
 */
class ImpedimentosLaboralesDeLaMujerEnElAML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPEDIMENTOS LABORALES DE LA MUJER EN EL ÁREA METROPOLITANA DE LA LAGUNA';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2018-09-10T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'impedimentos-laborales-de-la-mujer-en-el-AML';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Del total de las mujeres encuestadas en la ENOE en Torreón, durante el segundo trimestre del año y que forman parte de la Población Económicamente No Activa (PNEA), el 100% registró tener al menos una hija o un hijo, lo que pone sobre la mesa el papel que juega la maternidad dentro del no buscar incorporarse al mercado laboral.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImpedimentosLaboralesDeLaMujerEnElAML.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo','Genero');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ImpedimentosLaboralesDeLaMujerEnElAML

?>
