<?php
/**
 * TrcIMPLAN Sitio Web - Calidad del aire en Torreón y sus efectos en la salud
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
 * CalidadDelAireEnTorreonYSusEfectosEnLaSalud CalidadDelAireEnTorreonYSusEfectosEnLaSalud
 */
class CalidadDelAireEnTorreonYSusEfectosEnLaSalud extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Calidad del aire en Torreón y sus efectos en la salud';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2015-10-27T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'calidad-del-aire-en-torreon-y-sus-efectos-en-la-salud';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La contaminación ambiental en la Comarca tiene efectos nocivos en la población más vulnerable, menores de 5 años y mayores de 65, que puede derivar en enfermedades respiratorias..';
        $this->claves                     = 'IMPLAN, Torreon, Contaminacion, Aire, Medio Ambiente';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CalidadDelAireEnTorreonYSusEfectosEnLaSalud.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales', 'Salud');
        $this->fuentes                    = array('Dirección General de Medio Ambiente del Municipio de Torreón', 'Instituto de Políticas para el Transporte y el Desarrollo (ITDP)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // CalidadDelAireEnTorreonYSusEfectosEnLaSalud CalidadDelAireEnTorreonYSusEfectosEnLaSalud

?>
