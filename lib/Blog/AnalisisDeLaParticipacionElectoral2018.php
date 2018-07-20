<?php
/**
 * TrcIMPLAN Sitio Web - AnalisisDeLaParticipacionElectoral2018
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
 * Clase AnalisisDeLaParticipacionElectoral2018
 */
class AnalisisDeLaParticipacionElectoral2018 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Análisis de la participación electoral 2018';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2018-07-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'analisis-de-la-participacion-electoral-2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En los pasados comicios del 1 de julio, en Torreón hubo tres secciones en donde la participación superó el 80%, ubicadas en las colonias Ampliación Los Ángeles, Nuevo Torreón y Francisco I. Madero.';
        $this->claves                     = 'IMPLAN, Torreon, Participacion ciudadana, electoral, elecciones, votaciones 2018';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AnalisisDeLaParticipacionElectoral2018.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno','Participacion Ciudadana');
        $this->fuentes                    = array('Instituto Electoral de Coahuila');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AnalisisDeLaParticipacionElectoral2018

?>
