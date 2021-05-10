<?php
/**
 * TrcIMPLAN Sitio Web - LasLimitacionesDeLaNom035
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
 * Clase LasLimitacionesDeLaNom035
 */
class LasLimitacionesDeLaNom035 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las limitaciones de la NOM-035';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2021-05-10T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'las-limitaciones-de-la-nom035-may-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En octubre del 2018, se publicó en el Diario Oficial de la Federación (DOF) la Norma Oficial Mexicana NOM-035-STPS-2018 (NOM-035); un instrumento que permite evaluar el entorno organizacional, así como los factores de riesgo psicosocial en los centros de trabajo.';
        $this->claves                     = 'IMPLAN, Torreon, nom 035, psicosocial, riesgo, trabajo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LasLimitacionesDeLaNom035.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Salud');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LasLimitacionesDeLaNom035

?>
