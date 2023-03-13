<?php
/**
 * TrcIMPLAN Sitio Web - SaludYAsistenciaSocialEnTorreonPDDU
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
 * Clase SaludYAsistenciaSocialEnTorreonPDDU
 */
class SaludYAsistenciaSocialEnTorreonPDDU extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Salud y Asistencia Social en Torreón de acuerdo al PDDU';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda';
        $this->fecha                      = '2023-03-13T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'salud-y-asistencia-social-torreon-pddu-marzo-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El IMPLAN Torreón busca compartir el Plan Director de Desarrollo Urbano de Torreón y la importancia de su contenido, pues su objetivo es impulsar el correcto ordenamiento urbano del municipio. Tal como se ha venido mencionando, este documento señala las problemáticas y las propuestas para darles solución a través de 6 ejes principales: Desarrollo Social, Desarrollo Económico, Entorno Urbano, Movilidad, Medio Ambiente y Gobernanza.';
        $this->claves                     = 'IMPLAN, Torreon, salud, plan, director, asistencia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SaludYAsistenciaSocialEnTorreonPDDU.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase SaludYAsistenciaSocialEnTorreonPDDU

?>
