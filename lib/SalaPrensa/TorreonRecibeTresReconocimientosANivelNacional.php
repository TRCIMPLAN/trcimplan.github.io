<?php
/**
 * TrcIMPLAN Sitio Web - Torreón recibe tres reconocimientos a nivel nacional
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * @package TrcIMPLAN
 */

namespace SalaPrensa;

/**
 * Clase TorreonRecibeTresReconocimientosANivelNacional
 */
class TorreonRecibeTresReconocimientosANivelNacional extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón recibe tres reconocimientos a nivel nacional';
    //  $this->autor                      = '';
        $this->fecha                      = '2015-10-29T10:40';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-10-29-torreon-recibe-tres-reconocimientos-a-nivel-nacional';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón fue premiado por la plataforma www.trcimplan.gob.mx, realizada por el equipo técnico del IMPLAN, la cual ha logrado un importante vínculo informativo ciudadanía-municipio.';
        $this->claves                     = 'IMPLAN, Torreon, Reconocimiento, Plataforma';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/TorreonRecibeTresReconocimientosANivelNacional.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Innovación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TorreonRecibeTresReconocimientosANivelNacional

?>
