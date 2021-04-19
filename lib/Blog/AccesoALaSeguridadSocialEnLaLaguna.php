<?php
/**
 * TrcIMPLAN Sitio Web - AccesoALaSeguridadSocialEnLaLaguna
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
 * Clase AccesoALaSeguridadSocialEnLaLaguna
 */
class AccesoALaSeguridadSocialEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Acceso a la seguridad social en La Laguna.';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda';
        $this->fecha                      = '2021-04-19T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'acceso-a-la-seguridad-social-en-la-laguna-abril-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón son 202,567 los trabajadores asegurados por el IMSS, dicha cifra tuvo un incremento de 1.94% respecto al 31 de enero de 2019. En cuanto a los asegurados no trabajadores, el incremento fue de 10.27%, cifra que asciende a 30,696 personas.';
        $this->claves                     = 'IMPLAN, Torreon, trabajadores, imss, asegurados, seguridad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AccesoALaSeguridadSocialEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo','Bienestar');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AccesoALaSeguridadSocialEnLaLaguna

?>
