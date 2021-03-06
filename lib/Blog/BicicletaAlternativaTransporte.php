<?php
/**
 * TrcIMPLAN Sitio Web - La Bicicleta como alternativa de transporte
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
 * Clase BicicletaAlternativaTransporte
 */
class BicicletaAlternativaTransporte extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Bicicleta como alternativa de transporte';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2015-05-05T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'bicicleta-alternativa-transporte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'No importa cuánto gastemos en construir vías rápidas, siempre serán insuficientes para alojar la creciente cantidad de vehículos que entran a la ciudad. Todos los ciudadanos debemos hacer conciencia e impulsar y fomentar el uso de la bicicleta.';
        $this->claves                     = 'IMPLAN, Torreon, Transporte, Bicicleta';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/BicicletaAlternativaTransporte.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Movilidad');
        $this->fuentes                    = array('Banco Interamericano del Desarrollo');
        $this->regiones                   = array('Nacional');
    } // constructor

} // Clase BicicletaAlternativaTransporte

?>
