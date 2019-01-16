<?php
/**
 * TrcIMPLAN Sitio Web - SmartCitiesIdentidadTecnologiaYCiudad
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
 * Clase SmartCitiesIdentidadTecnologiaYCiudad
 */
class SmartCitiesIdentidadTecnologiaYCiudad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'SMART CITIES: Identidad, Tecnología y Ciudad.';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2019-01-16T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'smart-cities-identidad-tecnologia-y-ciudad-ene2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Una de las problemáticas que enfrentan las ciudades hoy en día es el de la pérdida de su Patrimonio Histórico y Cultural. Actualmente, las ciudades están trabajando en mejorar las técnicas para la conservación de su patrimonio aprovechando el uso de datos y la aplicación de tecnologías. En Torreón han desaparecido 24 de los 133 inmuebles catalogados como patrimonio.';
        $this->claves                     = 'IMPLAN, Torreon, Patrimonio Historico, Patrimonio Cultural, Patrimonio';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SmartCitiesIdentidadTecnologiaYCiudad.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array('Agencia de noticias UN', 'IMPLAN', 'INAH', 'INBA');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SmartCitiesIdentidadTecnologiaYCiudad

?>
