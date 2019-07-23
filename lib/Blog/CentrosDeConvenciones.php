<?php
/**
 * TrcIMPLAN Sitio Web - CentrosDeConvenciones
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
 * Clase CentrosDeConvenciones
 */
class CentrosDeConvenciones extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Los Centros de Convenciones como Equipamiento para el Desarrollo del Turismo de Reuniones';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2019-07-23T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'centros-de-convenciones-julio2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La industria de reuniones en México representa más de 266 mil eventos anuales, 30 millones de cuarto de noche, una derrama económica de 25 mil millones de dólares y la generación del 1.5% del PIB. En Torreón, de acuerdo a datos de la Oficina de Convenciones y visitantes (OCV) los ingresos estimados para la industria de reuniones ascienden a 110.833 mdp con la expectativa de que para 2019 esta cifra se incremente en 47%; pasando de 55 eventos atendidos en 2017 a 85 para 2019.';
        $this->claves                     = 'IMPLAN, Torreon, centro de convenciones, turismo, desarrollo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CentrosDeConvenciones.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('OCV','OMT','SIDUM');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CentrosDeConvenciones

?>
