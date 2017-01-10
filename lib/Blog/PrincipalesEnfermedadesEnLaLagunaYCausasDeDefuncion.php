<?php
/**
 * TrcIMPLAN Sitio Web - PrincipalesEnfermedadesEnLaLagunaYCausasDeDefuncion
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * Clase PrincipalesEnfermedadesEnLaLagunaYCausasDeDefuncion
 */
class PrincipalesEnfermedadesEnLaLagunaYCausasDeDefuncion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Principales enfermedades en La Laguna y causas de defunción';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2017-01-10T15:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'principales-enfermedades-en-la-laguna-y-causas-de-defuncion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las enfermedades más comunes en Coahuila y la Jurisdicción Sanitaria correspondiente a Torreón, Matamoros y Viesca, son las infecciones respiratorias e intestinales que suman más del 80 % de los casos. En las causas de defunción las principales son las afecciones cardiacas y en segundo lugar la diabetes.';
        $this->claves                     = 'IMPLAN, Torreon, Enfermedades, Coahuila, Defunciones';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PrincipalesEnfermedadesEnLaLagunaYCausasDeDefuncion.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('IMSS Subdelegación Torreón');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros');
    } // constructor

} // Clase PrincipalesEnfermedadesEnLaLagunaYCausasDeDefuncion

?>
