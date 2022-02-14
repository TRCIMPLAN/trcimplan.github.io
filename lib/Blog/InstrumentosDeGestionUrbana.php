<?php
/**
 * TrcIMPLAN Sitio Web - InstrumentosDeGestionUrbana
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
 * Clase InstrumentosDeGestionUrbana
 */
class InstrumentosDeGestionUrbana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Instrumentos de gestión urbana, para un desarrollo urbano sostenible';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2022-02-14T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'instrumentos-de-gestion-urbana-feb-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las ciudades son el centro del crecimiento económico, según datos de ONU Habitat, es en los núcleos urbanos donde se genera el 60% del PIB mundial. Esto ha desencadenado una fuerte migración de la población rural a las zonas urbanas. El crecimiento acelerado que han vivido las ciudades en las últimas décadas, ha desencadenado una serie de problemáticas urbanas entre las que se encuentra un déficit en la oferta de infraestructura y servicios, poniendo en riesgo la calidad de vida de la población.';
        $this->claves                     = 'IMPLAN, Torreon, urbana, infraestructura, ciudades, instrumentos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InstrumentosDeGestionUrbana.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('ONU-HABITAT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase InstrumentosDeGestionUrbana

?>
