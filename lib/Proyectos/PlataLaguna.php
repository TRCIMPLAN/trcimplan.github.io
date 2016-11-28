<?php
/**
 * TrcIMPLAN Sitio Web - Plata Laguna
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

namespace Proyectos;

/**
 * Clase PlataLaguna
 */
class PlataLaguna extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Plata Laguna';
        $this->autor                      = 'Dirección de Proyectos Estratégicos';
        $this->fecha                      = '2014-06-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'plata-laguna';
        $this->imagen                     = 'plata-laguna/imagen.jpg';
        $this->imagen_previa              = 'plata-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Contribuir a que la plata de La Laguna sea un sector mundialmente competitivo; reconocida por su calidad e identificable por el consumidor.';
        $this->claves                     = 'IMPLAN, Torreon, Plata, Laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón 2040 > Proyectos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Proyectos/PlataLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Innovación');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PlataLaguna

?>
