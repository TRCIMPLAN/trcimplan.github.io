<?php
/**
 * TrcIMPLAN Sitio Web - ElManejoDelAguaEnLaComarcaLagunera
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
 * Clase ElManejoDelAguaEnLaComarcaLagunera
 */
class ElManejoDelAguaEnLaComarcaLagunera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El manejo del agua en la Comarca Lagunera';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2021-07-05T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-manejo-del-agua-en-la-comarca-lagunera-jul-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Nuestro planeta está conformado en un 70% de agua. Este recurso natural juega un papel esencial en el desarrollo de las ciudades. Históricamente los asentamientos humanos se han generado cerca de fuentes de este liquido vital, ya que de él depende no solo la vida, si no el desarrollo socio-económico.';
        $this->claves                     = 'IMPLAN, Torreon, agua, laguna, comarca, lagunera';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElManejoDelAguaEnLaComarcaLagunera.md';
        // Para el Organizador
        $this->categorias                 = array('Servicios Públicos', 'Recursos Naturales');
        $this->fuentes                    = array('CONAGUA');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElManejoDelAguaEnLaComarcaLagunera

?>
