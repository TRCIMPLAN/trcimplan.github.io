<?php
/**
 * TrcIMPLAN Sitio Web - PodasEscombroYCiudadanos
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
 * Clase PodasEscombroYCiudadanos
 */
class PodasEscombroYCiudadanos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Podas, escombro y ciudadanos';
        $this->autor                      = 'Q.F.B. Susana Estens de la Garza';
        $this->fecha                      = '2017-10-09T11:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'podas-escombro-y-ciudadanos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Aunque se tiene la percepción de que los servicios de limpieza son buenos, podríamos y deberíamos tener una ciudad más limpia. Porque gran parte del escombro es arrojado a terrenos abiertos y no se aprovechan las podas para hacer composta.';
        $this->claves                     = 'IMPLAN, Torreon, Podas, Escombro, Ciudadanos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PodasEscombroYCiudadanos.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Recursos Naturales', 'Servicios Públicos');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase PodasEscombroYCiudadanos

?>
