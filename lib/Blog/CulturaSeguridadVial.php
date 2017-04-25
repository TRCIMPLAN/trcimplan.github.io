<?php
/**
 * TrcIMPLAN Sitio Web - Cultura y seguridad vial
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
 * Clase CulturaSeguridadVial
 */
class CulturaSeguridadVial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cultura y seguridad vial';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2014-10-22T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'cultura-seguridad-vial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La cultura vial se refiere a la construcción de una convivencia armoniosa, responsable y de respeto entre todos los que hacemos uso de las vías de tránsito, sean estas aceras, rutas, caminos, ciclo vías, etc.';
        $this->claves                     = 'IMPLAN, Torreon, Cultura, Vial, Tránsito';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html     = 'lib/Blog/CulturaSeguridadVial.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Transporte', 'Movilidad', 'Seguridad', 'Vialidad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('La Laguna');
    } // constructor

} // Clase CulturaSeguridadVial

?>
