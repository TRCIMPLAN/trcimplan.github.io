<?php
/**
 * TrcIMPLAN Sitio Web - Los instrumentos de gestión en el Gobierno Municipal
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
 * Clase InstrumentosDeGestion
 */
class InstrumentosDeGestion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los instrumentos de gestión en el Gobierno Municipal';
        $this->autor                      = 'Lic. José Ruiz Fernández';
        $this->fecha                      = '2018-01-24T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'instrumentos-de-gestion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A nivel local, los instrumentos de gestión revisten una importancia trascendental para el funcionamiento de la administración pública, por ser los gobiernos de las ciudades el primer momento de contacto de la administración pública con la ciudadanía.';
        $this->claves                     = 'IMPLAN, Torreon, Gestion, Instrumentos';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/InstrumentosDeGestion.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Gobierno');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Coahuila', 'Nacional');
    } // constructor

} // Clase InstrumentosDeGestion

?>
