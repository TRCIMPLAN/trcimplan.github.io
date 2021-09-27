<?php
/**
 * TrcIMPLAN Sitio Web - CambioTecnologicoEnElDerechoALaInformacion
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
 * Clase CambioTecnologicoEnElDerechoALaInformacion
 */
class CambioTecnologicoEnElDerechoALaInformacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cambio Tecnológico en el Derecho a la Información';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2021-09-23T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'cambio-tecnologico-en-el-derecho-a-la-informacion-sep-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este año los sistemas estatales y federales de solicitudes de información se integraron en una sola plataforma: el Sistema de Solicitudes de Acceso a la Información (SISAI 2.0)';
        $this->claves                     = 'IMPLAN, Torreon, informacion, derecho';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CambioTecnologicoEnElDerechoALaInformacion.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno Digital');
        $this->fuentes                    = array('ICAI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CambioTecnologicoEnElDerechoALaInformacion

?>
