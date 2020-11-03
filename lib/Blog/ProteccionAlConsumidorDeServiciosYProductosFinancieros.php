<?php
/**
 * TrcIMPLAN Sitio Web - ProteccionAlConsumidorDeServiciosYProductosFinancieros
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
 * Clase ProteccionAlConsumidorDeServiciosYProductosFinancieros
 */
class ProteccionAlConsumidorDeServiciosYProductosFinancieros extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Protección al Consumidor de Servicios y Productos Financieros';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2020-11-03T12:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'proteccion-al-consumidor-de-servicios-y-productos-financieros-oct-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“La protección al consumidor implica, entre otros, la revelación de la información y la transparencia, lo cual debería ser un facilitador de la comparación de productos y servicios financieros de la misma naturaleza (OCDE, 2011)”.';
        $this->claves                     = 'IMPLAN, Torreon, consumidor, servicios financieros, productos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProteccionAlConsumidorDeServiciosYProductosFinancieros.md';
        // Para el Organizador
        $this->categorias                 = array('Mercados', 'Bienestar');
        $this->fuentes                    = array('PNIF');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ProteccionAlConsumidorDeServiciosYProductosFinancieros

?>
