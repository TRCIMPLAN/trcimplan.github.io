<?php
/**
 * TrcIMPLAN Sitio Web - PET0211DiagnosticoBuenGobierno
 *
 * Copyright (C) 2016 IMPLAN Torreón
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

namespace PET;

/**
 * Clase PET0211DiagnosticoBuenGobierno
 */
class PET0211DiagnosticoBuenGobierno extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Diagnóstico Estratégico: Buen Gobierno';
     // $this->autor                      = '';
        $this->fecha                      = '2016-10-10T02:11';
        // El nombre del archivo a crear
        $this->archivo                    = 'diagnostico-estrategico-buen-gobierno';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Plan Estratégico para Torreón con enfoque Metropolitano 2040 - Diagnóstico Estratégico: Buen Gobierno.';
        $this->claves                     = 'Plan, Estrategico, Torreón, 2040, Metropolitano, Buen, Gobierno';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/PET/PET0211DiagnosticoBuenGobierno.md';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PET0211DiagnosticoBuenGobierno

?>
