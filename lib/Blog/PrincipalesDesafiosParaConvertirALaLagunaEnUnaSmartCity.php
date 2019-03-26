<?php
/**
 * TrcIMPLAN Sitio Web - PrincipalesDesafiosParaConvertirALaLagunaEnUnaSmartCity
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
 * Clase PrincipalesDesafiosParaConvertirALaLagunaEnUnaSmartCity
 */
class PrincipalesDesafiosParaConvertirALaLagunaEnUnaSmartCity extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Principales desafíos para convertir a La Laguna en una Smart City';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2019-03-26T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'principales-desafios-para-convertir-a-la-laguna-en-una-smart-city-marzo2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El concepto de Smart City o Ciudad Inteligente surge como respuesta a los retos de las ciudades actuales ocasionados por los modelos tradicionales de ciudad, en los que el cambio climático, la desigualdad y los problemas de movilidad son algunos de los efectos secundarios del crecimiento desordenado.';
        $this->claves                     = 'IMPLAN, Torreon, smart city';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PrincipalesDesafiosParaConvertirALaLagunaEnUnaSmartCity.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Cultura');
        $this->fuentes                    = array('IESE Business School','Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PrincipalesDesafiosParaConvertirALaLagunaEnUnaSmartCity

?>
