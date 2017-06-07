<?php
/**
 * TrcIMPLAN Sitio Web - Mejores sitios web y datos abiertos para Gobiernos Abiertos
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
 * Clase MejoresSitiosWebParaGobiernosAbiertos
 */
class MejoresSitiosWebParaGobiernosAbiertos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Mejores sitios web y datos abiertos para Gobiernos Abiertos';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2015-11-13T14:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'mejores-sitios-web-para-gobiernos-abiertos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los ciudadanos demandan que se use la tecnología para que los datos del gobierno lleguen con claridad, rapidez y efectividad.';
        $this->claves                     = 'IMPLAN, Torreon, Gobierno Abierto, Datos Abiertos, Formatos Abiertos, Carta Internacional';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MejoresSitiosWebParaGobiernosAbiertos.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Gobierno Digital', 'Innovación');
        $this->fuentes                    = array('Gobierno de la República');
        $this->regiones                   = array();
    } // constructor

} // Clase MejoresSitiosWebParaGobiernosAbiertos

?>
