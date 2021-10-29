<?php
/**
 * TrcIMPLAN Sitio Web - ImplanTorreonPlanearInvestigarDifundir
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
 * Clase ImplanTorreonPlanearInvestigarDifundir
 */
class ImplanTorreonPlanearInvestigarDifundir extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN Torreón: planear, investigar y difundir resultados.';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda';
        $this->fecha                      = '2021-10-28T13:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'implan-planear-investigar-difundir-oct-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La información que se publica a través de la página “trcimplan.gob.mx” es para consulta pública y es gratuita. Ésta se distribuye en 5 principales ejes: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad, a partir de estos se desglosan 34 categorías, de las cuáles se muestra la información de más de 600 indicadores.';
        $this->claves                     = 'IMPLAN, Torreon, informacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImplanTorreonPlanearInvestigarDifundir.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ImplanTorreonPlanearInvestigarDifundir

?>
