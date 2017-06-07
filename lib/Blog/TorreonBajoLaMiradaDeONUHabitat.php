<?php
/**
 * TrcIMPLAN Sitio Web - Torreón bajo la mirada de ONU Hábitat
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
 * Clase TorreonBajoLaMiradaDeONUHabitat
 */
class TorreonBajoLaMiradaDeONUHabitat extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón bajo la mirada de ONU Hábitat';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2017-02-23T09:03';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-bajo-la-mirada-de-onu-habitat';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Índice de las Ciudades Prósperas es un proyecto impulsado por ONU Hábitat y financiado en México por INFONAVIT. Torreón mostró una prosperidad moderada, similar a ciudades como Manila en Filipinas o Quito, Ecuador.';
        $this->claves                     = 'IMPLAN, Torreon, ONU, Habitat';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonBajoLaMiradaDeONUHabitat.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Empresas', 'Gobierno', 'Infraestructura', 'Recursos Naturales');
        $this->fuentes                    = array('INFONAVIT', 'ONU-Habitat');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase TorreonBajoLaMiradaDeONUHabitat

?>
