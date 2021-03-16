<?php
/**
 * TrcIMPLAN Sitio Web - Teletrabajo
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
 * Clase Teletrabajo
 */
class Teletrabajo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Teletrabajo: “Nuevas reglas del Derecho Mexicano”';
        $this->autor                      = 'Lic. María Teresa Sánchez Domínguez';
        $this->fecha                      = '2021-03-16T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'teletrabajo-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Iniciamos el 2021 con noticias en materia de derecho laboral, con la muy acertada pero ambigua reforma al artículo 311 de la Ley Federal del Trabajo, en materia de Teletrabajo, en donde se adiciona el capítulo XII BIS; la cual se publicó en el Diario Oficial de la Federación el día 11 de enero del 2021';
        $this->claves                     = 'IMPLAN, Torreon, teletrabajo, reforma, diario oficial';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/Teletrabajo.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase Teletrabajo

?>
