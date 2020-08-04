<?php
/**
 * TrcIMPLAN Sitio Web - InfraestructuraVerdeEnElCentroHistoricoDeTorreon
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
 * Clase InfraestructuraVerdeEnElCentroHistoricoDeTorreon
 */
class InfraestructuraVerdeEnElCentroHistoricoDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Infraestructura Verde en el Centro Histórico de Torreón';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2020-08-04T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'infraestructura-verde-en-el-centro-historico-de-torreon-agosto-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Hoy en día hay un desbalance entre cómo y cuánto utilizamos de los recursos naturales, cómo vivimos de y con la naturaleza, y la calidad de vida y salud de los humanos, lo cual está fuertemente ligado con la salud del medio ambiente (SEDATU, 2020).';
        $this->claves                     = 'IMPLAN, Torreon, infraestructura verde, centro, historico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InfraestructuraVerdeEnElCentroHistoricoDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura','Medio Ambiente');
        $this->fuentes                    = array('SEDATU');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase InfraestructuraVerdeEnElCentroHistoricoDeTorreon

?>
