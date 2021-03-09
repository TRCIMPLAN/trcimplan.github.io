<?php
/**
 * TrcIMPLAN Sitio Web - ElEmpoderamientoEconomicoDeONUMujeres
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
 * Clase ElEmpoderamientoEconomicoDeONUMujeres
 */
class ElEmpoderamientoEconomicoDeONUMujeres extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El empoderamiento económico de ONU Mujeres: Datos y estrategias para La Laguna.';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2021-03-09T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-empoderamiento-economico-de-onu-mujeres-mar2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'ONU Mujeres, es la organización de las Naciones Unidas encargada de promover la igualdad de género y el empoderamiento de las mujeres. Esta organización establece normas internacionales y colabora con países miembros en la creación de leyes y programas, para la igualdad de género. Bajo el contexto de la pandemia, ONU Mujeres la visibiliza como un peso adicional que las mujeres soportan en vías de llegar a la igualdad, de ahí que “Mujeres líderes: Por un futuro igualitario en el mundo de la Covid-19”, haya sido el tema para el Día Internacional de la Mujer.';
        $this->claves                     = 'IMPLAN, Torreon, onu, mujeres, igualdad, genero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElEmpoderamientoEconomicoDeONUMujeres.md';
        // Para el Organizador
        $this->categorias                 = array('Género');
        $this->fuentes                    = array('onu');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElEmpoderamientoEconomicoDeONUMujeres

?>
