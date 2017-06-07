<?php
/**
 * TrcIMPLAN Sitio Web - Grupos vulnerables: el objetivo del proyecto Ciudad DIF
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
 * Clase GruposVulnerablesElObjetivoDelProyectoCiudadDIF
 */
class GruposVulnerablesElObjetivoDelProyectoCiudadDIF extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Grupos vulnerables: el objetivo del proyecto Ciudad DIF';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-10-06T12:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'grupos-vulnerables-el-objetivo-del-proyecto-ciudad-dif';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El actual crecimiento de la ciudad demanda un aumento en la infraestructura que permita la integración social de todos los grupos vulnerables cuya población ha ido creciendo en los últimos años.';
        $this->claves                     = 'IMPLAN, Torreon, Grupos Vulnerables, Ciudad DIF, Adutos Mayores, Migrantes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/GruposVulnerablesElObjetivoDelProyectoCiudadDIF.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Grupos Vulnerables', 'Salud');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase GruposVulnerablesElObjetivoDelProyectoCiudadDIF

?>
