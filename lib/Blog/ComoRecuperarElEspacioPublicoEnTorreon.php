<?php
/**
 * TrcIMPLAN Sitio Web - ComoRecuperarElEspacioPublicoEnTorreon
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
 * Clase ComoRecuperarElEspacioPublicoEnTorreon
 */
class ComoRecuperarElEspacioPublicoEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '¿Cómo recuperar el espacio público en Torreón?';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2019-02-27T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'como-recuperar-el-espacio-publico-en-torreon-feb2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La ley de asentamientos humanos, ordenamiento territorial y desarrollo urbano señala que los municipios son los encargados de velar, vigilar y proteger la seguridad, integridad y calidad del espacio público. La financiación pública y privada dirigida a la recuperación del espacio público es esencial para el cumplimiento de este objetivo, del desarrollo pleno de la sociedad.';
        $this->claves                     = 'IMPLAN, Torreon, espacio publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ComoRecuperarElEspacioPublicoEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Servicios Públicos');
        $this->fuentes                    = array('INAFED');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComoRecuperarElEspacioPublicoEnTorreon

?>
