<?php
/**
 * TrcIMPLAN Sitio Web - ElImplanTorreonHaciaLasPoliticasDeJuventud
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
 * Clase ElImplanTorreonHaciaLasPoliticasDeJuventud
 */
class ElImplanTorreonHaciaLasPoliticasDeJuventud extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El IMPLAN Torreón hacia las políticas de Juventud';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2018-10-02T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-implan-torreon-hacia-las-politicas-de-juventud';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La juventud es un complejo momento en donde criterios biológicos y psicológicos están estrechamente asociados con aspectos de orden social, demográfico, histórico, cultural y económico1';
        $this->claves                     = 'IMPLAN, Torreon, juventud';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElImplanTorreonHaciaLasPoliticasDeJuventud.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Participación ciudadana');
        $this->fuentes                    = array('Implan');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElImplanTorreonHaciaLasPoliticasDeJuventud

?>
