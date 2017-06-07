<?php
/**
 * TrcIMPLAN Sitio Web - PET0631VisionDesarrolloSocial
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
 * Clase PET0631VisionDesarrolloSocial
 */
class PET0631VisionDesarrolloSocial extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Visión de Desarrollo Social 2040';
        $this->fecha                      = '2016-10-10T06:31';
        // El nombre del archivo a crear
        $this->archivo                    = 'vision-desarrollo-social';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Plan Estratégico para Torreón con enfoque Metropolitano 2040 - Visión de Desarrollo Social 2040.';
        $this->claves                     = 'Plan, Estrategico, Torreón, 2040, Metropolitano, Vision, Desarrollo, Social';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/PET/PET0631VisionDesarrolloSocial.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura', 'Delincuencia', 'Educación', 'Grupos Vulnerables', 'Participación Ciudadana', 'Seguridad', 'Salud');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase PET0631VisionDesarrolloSocial

?>
