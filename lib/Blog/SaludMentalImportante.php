<?php
/**
 * TrcIMPLAN Sitio Web - SaludMentalImportante
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
 * Clase SaludMentalImportante
 */
class SaludMentalImportante extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Salud Mental ¿Importante?';
        $this->autor                      = 'Mtro. Omar Ortega Herrera';
        $this->fecha                      = '2022-07-18T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'salud-mental-importante-julio-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '¿Cómo sabemos cuando algo importa? ¿Será por el tiempo dedicado, el esfuerzo realizado, el presupuesto destinado, un plan para que algo suceda, una buena intención o lanzando preocupaciones en reuniones? Podemos dejar esa pregunta para pensarla juntos, podemos decir que lo importante se nota con las acciones tangibles, en donde la ciudadanía se ve beneficiada.';
        $this->claves                     = 'IMPLAN, Torreon, ciudadania, salud, mental';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SaludMentalImportante.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SaludMentalImportante

?>
