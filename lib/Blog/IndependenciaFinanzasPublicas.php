<?php
/**
 * TrcIMPLAN Sitio Web - Independencia de las Finanzas Públicas
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
 * Clase IndependenciaFinanzasPublicas
 */
class IndependenciaFinanzasPublicas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Independencia de las Finanzas Públicas';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-06-19T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'independencia-finanzas-publicas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de la relación de ingresos propios y totales y la capacidad financiera de los municipios de la Zona Metropolitana de la Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Ingresos, Capacidad Financiera';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/IndependenciaFinanzasPublicas.html';
        // Para el Organizador
        $this->categorias                 = array('Finanzas Públicas', 'Gobierno');
        $this->fuentes                    = array('Elaboración propia con datos obtenidos del INEGI', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase IndependenciaFinanzasPublicas

?>
