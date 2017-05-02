<?php
/**
 * TrcIMPLAN Sitio Web - Evolución del mercado hipotecario en Torreón (diciembre 2015)
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
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase EvolucionDelMercadoHipotecarioEnTorreon201512
 */
class EvolucionDelMercadoHipotecarioEnTorreon201512 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Evolución del mercado hipotecario en Torreón (diciembre 2015)';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2015-12-14T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'evolucion-del-mercado-hipotecario-en-torreon-2015-12';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El hecho de que en la Comarca Lagunera el número de créditos hipotecarios crezca a una tasa superior a la nacional es una señal de desarrollo económico.';
        $this->claves                     = 'IMPLAN, Torreon, Hipotecas, Economía, Inmuebles, Mercado, Cartera, Vencida';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EvolucionDelMercadoHipotecarioEnTorreon201512.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Mercados');
        $this->fuentes                    = array('Comisión Nacional Bancaria y de Valores (CNBV)');
        $this->regiones                   = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase EvolucionDelMercadoHipotecarioEnTorreon201512

?>
