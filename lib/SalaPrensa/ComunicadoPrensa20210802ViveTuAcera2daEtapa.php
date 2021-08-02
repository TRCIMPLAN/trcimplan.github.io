<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210802ViveTuAcera2daEtapa
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

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20210802ViveTuAcera2daEtapa
 */
class ComunicadoPrensa20210802ViveTuAcera2daEtapa extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Proyecto “Vive tu Acera” se encuentra en su Segunda Etapa.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-08-02T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-08-02-comunicado-vive-tu-acera-etapa2';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Entre 2018 y 2020 se han registrado 44 incidentes viales en los 4 cruceros elegidos para colocar los parques de bolsillo.
La instalación estará sometida a evaluación en periodos de 1, 3 y 5 meses.';
        $this->claves                     = 'IMPLAN, Torreon, vive tu acera, incidentes, viales, parques';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210802ViveTuAcera2daEtapa.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20210802ViveTuAcera2daEtapa

?>
