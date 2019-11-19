<?php
/**
 * TrcIMPLAN Sitio Web - DeficitInfraestructuraEnTorreonParaAtenderSaludMental
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
 * Clase DeficitInfraestructuraEnTorreonParaAtenderSaludMental
 */
class DeficitInfraestructuraEnTorreonParaAtenderSaludMental extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Déficit de infraestructura en Torreón para atender la salud mental';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2019-11-19T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'deficit-infraestructura-en-torreon-para-atender-salud-mental-nov2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Sin salud mental, no hay salud. Las enfermedades mentales impactan la calidad de vida de la población, tanto de quien lo padece, como de aquellos en su entorno inmediato. La Organización Mundial de la Salud (OMS) dice que aquellos con trastornos mentales graves acortan su esperanza de vida de 10 a 20 años. Las enfermedades mentales pueden incidir en el desarrollo de enfermedades crónicas, es por ello que se incita a integrar los servicios de atención a la salud mental a los servicios generales de salud.';
        $this->claves                     = 'IMPLAN, Torreon, salud mental, infraestructura';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DeficitInfraestructuraEnTorreonParaAtenderSaludMental.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('Academia Nacional de Medicina.','Dirección General de Información en Salud','Secretaría de Salud');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase DeficitInfraestructuraEnTorreonParaAtenderSaludMental

?>
