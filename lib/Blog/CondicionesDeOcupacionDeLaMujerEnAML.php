<?php
/**
 * TrcIMPLAN Sitio Web - CondicionesDeOcupacionDeLaMujerEnAML
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
 * Clase CondicionesDeOcupacionDeLaMujerEnAML
 */
class CondicionesDeOcupacionDeLaMujerEnAML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Condiciones de ocupación de la mujer en el Área Metropolitana de La Laguna (AML)';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2018-09-03T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'condiciones-de-ocupacion-de-la-mujer-en-AML';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La posición que las mujeres tienen en el trabajo, es decir, si son subordinadas, empleadoras, trabajadoras por cuenta propia, o trabajadoras no remuneradas, ha permanecido constante desde el trimestre abril-junio de 2017. Del total de mujeres ocupadas, la mayoría es trabajadora subordinada y remunerada (73%); y la minoría es empleadora (3%).';
        $this->claves                     = 'IMPLAN, Torreon, Mujer, ocupacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CondicionesDeOcupacionDeLaMujerEnAML.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('OCDE','INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CondicionesDeOcupacionDeLaMujerEnAML

?>
