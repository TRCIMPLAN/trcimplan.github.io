<?php
/**
 * TrcIMPLAN Sitio Web - CentricoCT1FichaTecnica
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

namespace Investigaciones;

/**
 * Clase CentricoCT1FichaTecnica
 */
class CentricoCT1FichaTecnica extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Céntrico - TC1 Ficha Técnica: Calle Manuel Acuña entre Consitución e Independencia';
        $this->autor                      = 'Arq. Patricio Ruiz';
        $this->fecha                      = '2017-09-27T10:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'centrico-ct1-ficha-tecnica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A raíz del accidente entre el ciclista Eduardo Rentería (Ruedas del Desierto) y una camioneta en el cruce de Blvd. Constitución y Manuel Acuña, se realizó este análisis del corredor y de los factores que promueven la accidentalidad.';
        $this->claves                     = 'IMPLAN, Torreon, Ficha Tecnica, Calle Manuel Acuña, Constitucion, Indepencia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Investigaciones/CentricoCT1FichaTecnica.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
    } // constructor

} // Clase CentricoCT1FichaTecnica

?>
