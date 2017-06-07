<?php
/**
 * TrcIMPLAN Sitio Web - El Bosque Venustiano Carranza: diagnóstico y problemáticas
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
 * Clase ElBosqueVenustianoCarranzaDiagnosticoYProblematicas
 */
class ElBosqueVenustianoCarranzaDiagnosticoYProblematicas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Bosque Venustiano Carranza: diagnóstico y problemáticas';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-08-24T14:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-bosque-venustiano-carranza-diagnostico-y-problematicas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Bosque constituye el principal pulmón de la ciudad. En 1941, ya representaba el 5% de la mancha urbana. Dada su importancia como espacio público y ecológico el IMPLAN prepara una consulta ciudadana que refleje el sentir de la población sobre sus principales problemáticas.';
        $this->claves                     = 'IMPLAN, Torreon, Bosque, Areas verdes, Sustentabilidad, Medio Ambiente';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElBosqueVenustianoCarranzaDiagnosticoYProblematicas.md';
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales');
        $this->fuentes                    = array('Dirección General de Medio Ambiente del Municipio de Torreón');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ElBosqueVenustianoCarranzaDiagnosticoYProblematicas

?>
