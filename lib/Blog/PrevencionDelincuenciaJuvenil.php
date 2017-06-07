<?php
/**
 * TrcIMPLAN Sitio Web - La prevención de la Delincuencia Juvenil, elemento central de la prevención integral del delito y la violencia
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
 * Clase PrevencionDelincuenciaJuvenil
 */
class PrevencionDelincuenciaJuvenil extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La prevención de la Delincuencia Juvenil, elemento central de la prevención integral del delito y la violencia';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2015-01-07T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'prevencion-delincuencia-juvenil';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Dentro de una estrategia de prevención integral del delito, la delincuencia juvenil constituye desde luego el elemento fundamental, si lo que se pretende es evitar que niños de doce años decidan formar parte de la delincuencia.';
        $this->claves                     = 'IMPLAN, Torreon, Delincuencia Juvenil, Seguridad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PrevencionDelincuenciaJuvenil.md';
        // Para el Organizador
        $this->categorias                 = array('Delincuencia', 'Seguridad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PrevencionDelincuenciaJuvenil

?>
