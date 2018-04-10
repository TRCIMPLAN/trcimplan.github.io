<?php
/**
 * TrcIMPLAN Sitio Web - ImplicacionesDeLaReformaFiscalDeEstadosUnidosEnLaZML
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
 * Clase ImplicacionesDeLaReformaFiscalDeEstadosUnidosEnLaZML
 */
class ImplicacionesDeLaReformaFiscalDeEstadosUnidosEnLaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Implicaciones de la Reforma Fiscal de Estados Unidos en la ZML';
        $this->autor                      = array('Lic. Daniel Alejandro López Murga', 'Lic. Frida García Gutiérrez');
        $this->fecha                      = '2018-04-09T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'implicaciones-de-la-reforma-fiscal-de-estados-unidos-en-la-zml';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Laguna se beneficiará de las inversiones que la reforma fiscal atraerá a EUA a través de las exportaciones; por otro lado habrá desinversión en el sector productivo y una inflación mayor.';
        $this->claves                     = 'IMPLAN, Torreon, Reforma, Fiscal, ZML';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImplicacionesDeLaReformaFiscalDeEstadosUnidosEnLaZML.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Competitividad', 'Mercados','Finanzas Públicas', 'Macroeconomia');
        $this->fuentes                    = array('INEGI', 'BANXICO');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ImplicacionesDeLaReformaFiscalDeEstadosUnidosEnLaZML

?>
