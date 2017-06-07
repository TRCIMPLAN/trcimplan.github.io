<?php
/**
 * TrcIMPLAN Sitio Web - La Calle Completa: espacio vial para todos
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
 * Clase CalleCompletaEspacioVialTodos
 */
class CalleCompletaEspacioVialTodos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Calle Completa: espacio vial para todos';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2014-12-03T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'calle-completa-espacio-vital-todos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con la inclusión del automóvil en el espacio urbano se causó problemas como alta incidencia de accidentes, inaccesibilidad, contaminación, y el deterioro del espacio público más importante: la calle.';
        $this->claves                     = 'IMPLAN, Torreon, Calle completa';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CalleCompletaEspacioVialTodos.md';
        // Para el Organizador
        $this->categorias                 = array('Transporte', 'Movilidad', 'Infraestructura');
        $this->fuentes                    = array('Logit', 'Instituto de Políticas para el Transporte y el Desarrollo (ITDP)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CalleCompletaEspacioVialTodos

?>
