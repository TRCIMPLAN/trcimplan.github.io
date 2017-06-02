<?php
/**
 * TrcIMPLAN Sitio Web - Agua, recurso indispensable para el desarrollo de la ZML
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
 * Clase AguaRecursoIndispensableParaElDesarrolloDeLaZML
 */
class AguaRecursoIndispensableParaElDesarrolloDeLaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Agua, recurso indispensable para el desarrollo de la ZML';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2017-06-02T08:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'agua-recurso-indispensable-para-el-desarrollo-de-la-zml';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La región Lagunera opera con un déficit de agua, entendiendo éste como la diferencia entre la cantidad que se explota y la disposición del agua en una situación de equilibrio.';
        $this->claves                     = 'IMPLAN, Torreon, Agua, Recursos';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AguaRecursoIndispensableParaElDesarrolloDeLaZML.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales');
        $this->fuentes                    = array('Comisión Nacional del Agua (CONAGUA)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase AguaRecursoIndispensableParaElDesarrolloDeLaZML

?>
