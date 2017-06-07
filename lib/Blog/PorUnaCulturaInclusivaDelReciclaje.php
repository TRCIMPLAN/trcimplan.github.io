<?php
/**
 * TrcIMPLAN Sitio Web - Por una cultura inclusiva del reciclaje
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
 * Clase PorUnaCulturaInclusivaDelReciclaje
 */
class PorUnaCulturaInclusivaDelReciclaje extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Por una cultura inclusiva del reciclaje';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-03-29T12:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'por-una-cultura-inclusiva-del-reciclaje';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón se lleva a cabo el Programa Inclusivo de Reciclaje financiado por el BID para incorporar a los pepenadores de la ciudad a una cadena de valor del reciclaje buscando aumentar sus ingresos y calidad de vida. A la fecha se registran 1,100 recolectores, un grupo de personas de alta vulnerabilidad social.';
        $this->claves                     = 'IMPLAN, Torreon, Basura, Reciclaje';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PorUnaCulturaInclusivaDelReciclaje.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Recursos Naturales');
        $this->fuentes                    = array('Banco Interamericano del Desarrollo (BID)', 'Dirección General de Medio Ambiente del Municipio de Torreón', 'IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PorUnaCulturaInclusivaDelReciclaje

?>
