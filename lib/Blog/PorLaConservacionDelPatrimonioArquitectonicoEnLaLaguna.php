<?php
/**
 * TrcIMPLAN Sitio Web - Por la conservación del patrimonio arquitectónico en La Laguna
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
 * Clase PorLaConservacionDelPatrimonioArquitectonicoEnLaLaguna
 */
class PorLaConservacionDelPatrimonioArquitectonicoEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Por la conservación del patrimonio arquitectónico en La Laguna';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2015-12-21T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'por-la-conservacion-del-patrimonio-arquitectonico-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Si alguna construcción de Torreón se localiza dentro de las manzanas que conforman el polígono del Centro Histórico, está sujeta a restricciones en cuanto a su mantenimiento, uso o conservación.';
        $this->claves                     = 'IMPLAN, Torreon, Edificios, Historicos, Patrimonio, Centro';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PorLaConservacionDelPatrimonioArquitectonicoEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura', 'Infraestructura');
        $this->fuentes                    = array('Ayuntamiento de Torreón', 'Instituto Nacional de Bellas Artes (INBA)');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase PorLaConservacionDelPatrimonioArquitectonicoEnLaLaguna

?>
