<?php
/**
 * TrcIMPLAN Sitio Web - DiaInternacionalEliminacionViolenciaMujer
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
 * Clase DiaInternacionalEliminacionViolenciaMujer
 */
class DiaInternacionalEliminacionViolenciaMujer extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Día Internacional de la Eliminación de la Violencia contra la Mujer: Conmemoración y lucha.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2022-12-05T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'dia-internacional-eliminacion-violencia-mujer-dic-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En México, de las mujeres que experimentaron violencia física y/ o sexual en el ámbito de pareja, 13.1 % presentó una queja o denuncia ante alguna autoridad. Le siguen el ámbito escolar (7.8 %); familiar (7.1 %), laboral (6.5 %) y comunitario (4.3 %).';
        $this->claves                     = 'IMPLAN, Torreon, mujer, violencia, eliminacion, lucha, conmemoracion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DiaInternacionalEliminacionViolenciaMujer.md';
        // Para el Organizador
        $this->categorias                 = array('Género');
        $this->fuentes                    = array('ONU');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DiaInternacionalEliminacionViolenciaMujer

?>
