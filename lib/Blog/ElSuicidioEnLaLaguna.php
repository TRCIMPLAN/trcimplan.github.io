<?php
/**
 * TrcIMPLAN Sitio Web - ElSuicidioEnLaLaguna
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
 * Clase ElSuicidioEnLaLaguna
 */
class ElSuicidioEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Suicidio, un problema de salud pública creciente en La Laguna.';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2019-04-09T12:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-suicidio-en-la-laguna-abril2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Tanto en México como a nivel internacional, el suicidio es considerado como un problema de salud pública, que le compete al Estado prevenir. En el mundo, aproximadamente 800,000 personas mueren por esta causa cada año, lo que equivale a una persona cada 40 segundos; y en el país, para 2017, se registraron 6, 559 casos.';
        $this->claves                     = 'IMPLAN, Torreon, suicidio, la laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElSuicidioEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('salud');
        $this->fuentes                    = array('oms','OCDE');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElSuicidioEnLaLaguna

?>
