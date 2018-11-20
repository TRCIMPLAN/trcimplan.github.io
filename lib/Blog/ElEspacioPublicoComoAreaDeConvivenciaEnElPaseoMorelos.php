<?php
/**
 * TrcIMPLAN Sitio Web - ElEspacioPublicoComoAreaDeConvivenciaEnElPaseoMorelos
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
 * Clase ElEspacioPublicoComoAreaDeConvivenciaEnElPaseoMorelos
 */
class ElEspacioPublicoComoAreaDeConvivenciaEnElPaseoMorelos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Espacio Público como Área de Convivencia en el Paseo Morelos';
        $this->autor                      = 'Arq. José Antonio Ramírez Reyes';
        $this->fecha                      = '2018-11-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-espacio-publico-como-area-de-convivencia-en-el-paseo-morelos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El bienestar en el espacio público tiene que ver en qué hacemos en él, cómo lo hacemos y qué tan seguido lo hacemos; para ello, las calles, las plazas, los corredores deben presentar ciertas condiciones que faciliten estas actividades. Entonces necesitamos mirarlo como un “LUGAR” y no solo como una “CONEXIÓN” de un traslado diario, un paseo cotidiano, la espera y/o contemplación, actividades de esparcimiento e inclusive de conflicto.';
        $this->claves                     = 'IMPLAN, Torreon, Paseo Morelos, espacio publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElEspacioPublicoComoAreaDeConvivenciaEnElPaseoMorelos.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Servicios Públicos');
        $this->fuentes                    = array('ECOCITY','IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ElEspacioPublicoComoAreaDeConvivenciaEnElPaseoMorelos

?>
