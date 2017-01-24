<?php
/**
 * TrcIMPLAN Sitio Web - PET0221DiagnosticoDesarrolloEconomicoInnovacion
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
 * Clase PET0221DiagnosticoDesarrolloEconomicoInnovacion
 */
class PET0221DiagnosticoDesarrolloEconomicoInnovacion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Diagnóstico Estratégico: Desarrollo Económico e Innovación';
     // $this->autor                      = '';
        $this->fecha                      = '2016-10-10T02:21';
        // El nombre del archivo a crear
        $this->archivo                    = 'diagnostico-estrategico-desarrollo-economico-innovacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Plan Estratégico para Torreón con enfoque Metropolitano 2040 - Diagnóstico Estratégico: Desarrollo Económico e Innovación.';
        $this->claves                     = 'Plan, Estrategico, Torreón, 2040, Metropolitano, Desarrollo, Economia, Innovacion';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón 2040';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/PET/PET0221DiagnosticoDesarrolloEconomicoInnovacion.md';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Empleo', 'Empresas', 'Infraestructura', 'Innovación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase PET0221DiagnosticoDesarrolloEconomicoInnovacion

?>
