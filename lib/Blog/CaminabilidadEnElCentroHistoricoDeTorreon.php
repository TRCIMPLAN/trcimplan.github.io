<?php
/**
 * TrcIMPLAN Sitio Web - CaminabilidadEnElCentroHistoricoDeTorreon
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
 * Clase CaminabilidadEnElCentroHistoricoDeTorreon
 */
class CaminabilidadEnElCentroHistoricoDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Un Acercamiento a la Caminabilidad en el Centro Histórico de Torreón';
        $this->autor                      = 'Arq. José Antonio Ramírez Reyes';
        $this->fecha                      = '2019-06-26T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'caminabilidad-en-el-centro-historico-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“La caminabilidad es el grado en que las características del entorno construido y uso del suelo propician realizar recorridos peatonales para acceder a los servicios, ir al trabajo, pasear, o realizar ejercicio”.';
        $this->claves                     = 'IMPLAN, Torreon, Caminabilidad, centro historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CaminabilidadEnElCentroHistoricoDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array('INVI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase CaminabilidadEnElCentroHistoricoDeTorreon

?>
