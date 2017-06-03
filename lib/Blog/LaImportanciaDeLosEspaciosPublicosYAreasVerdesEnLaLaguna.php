<?php
/**
 * TrcIMPLAN Sitio Web - La importancia de los espacios públicos y áreas verdes en La Laguna
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
 * Clase LaImportanciaDeLosEspaciosPublicosYAreasVerdesEnLaLaguna
 */
class LaImportanciaDeLosEspaciosPublicosYAreasVerdesEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La importancia de los espacios públicos y áreas verdes en La Laguna';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2017-04-21T12:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-importancia-de-los-espacios-publicos-y-areas-verdes-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la actualidad son pocos los espacios públicos y con áreas verdes inclusivos a todos los ciudadanos de la región lagunera. El crecimiento de las ciudades provocó un rezago significativo de espacios dimensionados, diseñados y ubicados apropiadamente en el territorio urbano para la recreación y convivencia de la población Lagunera.';
        $this->claves                     = 'IMPLAN, Torreon, Espacios Publicos, Areas Verdes';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaImportanciaDeLosEspaciosPublicosYAreasVerdesEnLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'La Laguna');
    } // constructor

} // Clase LaImportanciaDeLosEspaciosPublicosYAreasVerdesEnLaLaguna

?>
