<?php
/**
 * TrcIMPLAN Sitio Web - TorreonYSuInfraestructuraCiclista
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
 * Clase TorreonYSuInfraestructuraCiclista
 */
class TorreonYSuInfraestructuraCiclista extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón y su infraestructura ciclista';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2018-03-05T12:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-y-su-infraestructura-ciclista';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la ciudad se cuenta con 8 vialidades con infraestructura para el uso de la bicicleta, de diferente tipología, con un total de  21 kilómetros de longitud. Sin embargo estas rutas no cuentan con las condiciones óptimas.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonYSuInfraestructuraCiclista.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Movilidad');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase TorreonYSuInfraestructuraCiclista

?>
