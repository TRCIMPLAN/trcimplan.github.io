<?php
/**
 * TrcIMPLAN Sitio Web - InfraestructuraVerdeTorreon
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

namespace SIGPlanes;

/**
 * Clase InfraestructuraVerdeTorreon
 */
class InfraestructuraVerdeTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Plan de Infraestructura Verde de Torreón';
        $this->fecha                     = '2020-12-02T09:00';
        // El nombre del archivo a crear
        $this->archivo                   = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'El Plan de Infraestructura Verde contiene un diagnóstico sobre las principales problemáticas hidrometeorológicas que afectan a nuestro sistema urbano municipal, es decir, las inundaciones pluviales y las altas temperaturas, mismas que se buscan mitigar a través de estrategias puntuales como la ampliación de la infraestructura pluvial o la instalación de zonas de captación sobre camellones en las principales vialidades de la ciudad.';
        $this->claves                    = 'IMPLAN, Torreon, infraestructura, verde, municipio';
        // Para el Organizador
        $this->categorias                = array('Gobierno', 'Infraestructura', 'Población');
        $this->fuentes                   = array('IMPLAN');
        $this->regiones                  = array('Torreón');
        // Imágenes
        $this->imagen                    = 'infraestructura-verde-de-torreon-2021/imagen.png';
        $this->imagen_previa             = 'infraestructura-verde-de-torreon-2021/imagen-previa.png';
        // URL de destino
        $this->url                       = 'https://drive.google.com/file/d/1q6zs_Qo8pEHrFpfAEEHSYSuMoFJysdqA/view?usp=sharing';
        $this->url_etiqueta              = 'Descargar PDF ';
    } // constructor

} // Clase InfraestructuraVerdeTorreon

?>
