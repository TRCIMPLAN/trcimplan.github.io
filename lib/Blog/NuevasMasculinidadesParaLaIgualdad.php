<?php
/**
 * TrcIMPLAN Sitio Web - NuevasMasculinidadesParaLaIgualdad
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
 * Clase NuevasMasculinidadesParaLaIgualdad
 */
class NuevasMasculinidadesParaLaIgualdad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Aplicación de las Nuevas Masculinidades para la Igualdad ';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2022-12-12T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'nuevas-masculinidades-para-la-igualdad-dic-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A nivel nacional, durante septiembre, los trabajadores hombres que habían inscrito a sus hijas o hijos ascendieron a 47 mil 497, frente a 114 mil 958 trabajadoras mujeres.';
        $this->claves                     = 'IMPLAN, Torreon, igualdad, masculinidad, trabajadores';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/NuevasMasculinidadesParaLaIgualdad.md';
        // Para el Organizador
        $this->categorias                 = array('Género');
        $this->fuentes                    = array('IMSS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase NuevasMasculinidadesParaLaIgualdad

?>
