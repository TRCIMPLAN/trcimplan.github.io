<?php
/**
 * TrcIMPLAN Sitio Web - ImportanciaDeLaPreservacionDelPatrimonioHistoricoEnTorreon
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
 * Clase ImportanciaDeLaPreservacionDelPatrimonioHistoricoEnTorreon
 */
class ImportanciaDeLaPreservacionDelPatrimonioHistoricoEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Importancia de la Preservación del Patrimonio Histórico de Torreón.';
        $this->autor                      = 'Arq. Olga Daniela Sánchez Valles';
        $this->fecha                      = '2020-11-23T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'importancia-preservacion-patrimonio-historico-torreon-nov-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Organización de las Naciones Unidas para la Educación, la Ciencia y la Cultura (UNESCO) define el patrimonio como el legado cultural que recibimos del pasado, el cual vivimos en el presente y, en su momento, transmitiremos a las generaciones futuras.';
        $this->claves                     = 'IMPLAN, Torreon, patrimonio, cultura patrimonio historico, unesco';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImportanciaDeLaPreservacionDelPatrimonioHistoricoEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ImportanciaDeLaPreservacionDelPatrimonioHistoricoEnTorreon

?>
