<?php
/**
 * TrcIMPLAN Sitio Web - Bosque Venustiano Carranza: Diagnóstico y Problemáticas (parte 2)
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
 * Clase BosqueVenustianoCarranzaDiagnosticoYProblematicasParte2
 */
class BosqueVenustianoCarranzaDiagnosticoYProblematicasParte2 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Bosque Venustiano Carranza: Diagnóstico y Problemáticas (parte 2)';
        $this->autor                      = array('Arq. Ilse Ávila García', 'Ing. Luis Campos Hinojosa', 'Lic. Luis A. Gutiérrez Arizpe', 'Lic. Rodrigo González Morales');
        $this->fecha                      = '2016-09-08T16:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'bosque-venustiano-carranza-diagnostico-y-problematicas-parte-2';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'IMPLAN Torreón realiza un Diagnóstico Integral del Bosque Venustiano Carranza que incluye la consulta ciudadana "Aire para Todos".';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/BosqueVenustianoCarranzaDiagnosticoYProblematicasParte2.md';
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales');
        $this->fuentes                    = array('Dirección General de Medio Ambiente del Municipio de Torreón', 'IMPLAN');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase BosqueVenustianoCarranzaDiagnosticoYProblematicasParte2

?>
