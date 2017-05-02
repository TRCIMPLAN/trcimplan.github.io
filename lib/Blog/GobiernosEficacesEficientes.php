<?php
/**
 * TrcIMPLAN Sitio Web - Gobiernos Eficaces y Eficientes
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 * Clase GobiernosEficacesEficientes
 */
class GobiernosEficacesEficientes extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Gobiernos eficaces y eficientes';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-06-12T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'gobiernos-eficaces-eficientes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La eficiencia de los gobiernos es el subíndice peor evaluado para la metrópoli ubicándonos en el lugar 63 de 77.';
        $this->claves                     = 'IMPLAN, Torreon, Gobierno, Eficiente, Doing Business';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/GobiernosEficacesEficientes.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Doing Business', 'Competitividad');
        $this->fuentes                    = array('IMCO');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase GobiernosEficacesEficientes

?>
