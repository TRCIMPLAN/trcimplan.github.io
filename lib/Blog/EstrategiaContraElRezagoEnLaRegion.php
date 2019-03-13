<?php
/**
 * TrcIMPLAN Sitio Web - EstrategiaContraElRezagoEnLaRegion
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
 * Clase EstrategiaContraElRezagoEnLaRegion
 */
class EstrategiaContraElRezagoEnLaRegion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Programa de Mejoramiento Urbano: estrategia contra el rezago en la región.';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2019-03-13T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'estrategia-contra-el-rezago-en-la-region';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la Zona Metropolitana de la Laguna (ZML) los índices de marginación colocan a Torreón con un – 1.722 un grado “Muy Bajo”, al igual que Lerdo (- 1.215, Muy Bajo), Gómez Palacio (- 1.488, Muy Bajo) y Matamoros (-1.098) siendo los de grado “Bajo”: San Pedro (-0.823) y Francisco I. Madero (- 1.021).';
        $this->claves                     = 'IMPLAN, Torreon, mejoramiento urbano, marginacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EstrategiaContraElRezagoEnLaRegion.md';
        // Para el Organizador
        $this->categorias                 = array('Servicios Públicos', 'Población');
        $this->fuentes                    = array('SEDATU','Diario Oficial de la Federación','El Imparcial','CONAPO', 'INPI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EstrategiaContraElRezagoEnLaRegion

?>
