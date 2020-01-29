<?php
/**
 * TrcIMPLAN Sitio Web - CaracteristicasDeUnBuenEspacioPublico
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
 * Clase CaracteristicasDeUnBuenEspacioPublico
 */
class CaracteristicasDeUnBuenEspacioPublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Características de un Buen Espacio Público';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2020-01-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'caracteristicas-de-un-buen-espacio-publico-ene2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Un espacio público es aquel lugar en el que convergen distintos factores culturales, intercambios sociales y económicos, de información y al que como su nombre lo indica pueden acceder cualquier persona, sin importar su edad, sexo, preferencia sexual, condición física o nivel socioeconómico.';
        $this->claves                     = 'IMPLAN, Torreon, espacio publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CaracteristicasDeUnBuenEspacioPublico.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura','Servicios Públicos','Bienestar');
        $this->fuentes                    = array('IMPLAN', 'WRI México', 'ONU Habitat');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CaracteristicasDeUnBuenEspacioPublico

?>
