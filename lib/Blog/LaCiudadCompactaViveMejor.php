<?php
/**
 * TrcIMPLAN Sitio Web - La Ciudad Compacta (como la familia pequeña) Vive Mejor
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
 * Clase LaCiudadCompactaViveMejor
 */
class LaCiudadCompactaViveMejor extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Ciudad Compacta (como la familia pequeña) Vive Mejor';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2015-07-01T15:16';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-ciudad-compacta-vive-mejor';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La política pública a adoptar como estrategia debe ser la de crecimiento interno: densificar la ciudad implotando su crecimiento hacia adentro y hacia arriba.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/LaCiudadCompactaViveMejor.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vivienda');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaCiudadCompactaViveMejor

?>
