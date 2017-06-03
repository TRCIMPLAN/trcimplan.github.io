<?php
/**
 * TrcIMPLAN Sitio Web - Datos Abiertos en los Gobiernos Municipales
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
 * Clase DatosAbiertosGobiernosMunicipales
 */
class DatosAbiertosGobiernosMunicipales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Datos Abiertos en los Gobiernos Municipales';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2014-11-04T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'datos-abiertos-gobiernos-municipales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con la parte tecnológica resuelta, ha sido común que cualquiera de nosotros se pregunte... ¿Cómo se podrían mejorar los servicios gubernamentales? La respuesta es Datos Abiertos.';
        $this->claves                     = 'IMPLAN, Torreon, Datos Abiertos, Gobierno Abierto';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html     = 'lib/Blog/DatosAbiertosGobiernosMunicipales.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Transparencia', 'Gobierno Digital');
        $this->fuentes                    = array('Gobierno de la República');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase DatosAbiertosGobiernosMunicipales

?>
