<?php
/**
 * TrcIMPLAN Sitio Web - IntegracionNormaTecnicaInfraestructuraVerdeTorreon
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
 * Clase IntegracionNormaTecnicaInfraestructuraVerdeTorreon
 */
class IntegracionNormaTecnicaInfraestructuraVerdeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Afe Integración de la Norma Técnica de Infraestructura Verde para Torreón.';
        $this->autor                      = 'Arq. Estefanía Rodríguez Schott';
        $this->fecha                      = '2021-12-14T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'integracion-norma-tecnica-infraestructura-verde-torreon-dic-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este manual facilitará a la ciudadanía la información necesaria para ejecutar, tanto en el espacio público como privado, 8 técnicas de Infraestructura Verde a micro escala y 10 a macro escala en el contexto de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, infraestructura, verde, manual, afe, norma, tecnica';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/IntegracionNormaTecnicaInfraestructuraVerdeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Medio Ambiente');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase IntegracionNormaTecnicaInfraestructuraVerdeTorreon

?>
