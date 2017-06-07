<?php
/**
 * TrcIMPLAN Sitio Web - La Necesidad de un Diagnóstico sobre la Delincuencia Juvenil en el Municipio de Torreón
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
 * Clase NecesidadDiagnosticoSobreDelincuenciaJuvenil
 */
class NecesidadDiagnosticoSobreDelincuenciaJuvenil extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Necesidad de un Diagnóstico sobre la Delincuencia Juvenil en el Municipio de Torreón';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2015-04-22T09:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'necesidad-diagnostico-sobre-delincuencia-juvenil';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'Se debe desarrollar un trabajo conjunto entre autoridades y organizaciones civiles en el tema de la delincuencia juvenil para tener un conocimiento claro de cómo ha evolucionado, de su situación real y para crear las políticas públicas pertinentes.';
        $this->claves                     = 'IMPLAN, Torreon, Delincuencia, Juvenil, Autoridad, Organizaciones, Civiles, Politicas, Publicas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/NecesidadDiagnosticoSobreDelincuenciaJuvenil.md';
        // Para el Organizador
        $this->categorias                 = array('Delincuencia', 'Seguridad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase NecesidadDiagnosticoSobreDelincuenciaJuvenil

?>
