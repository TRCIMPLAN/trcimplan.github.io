<?php
/**
 * TrcIMPLAN Sitio Web - ReglamentoDeDesarrolloUrbanoZonificacionUsoDeSueloYConstruccionDelMunicipioDeTorreon
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
 * Clase ReglamentoDeDesarrolloUrbanoZonificacionUsoDeSueloYConstruccionDelMunicipioDeTorreon
 */
class ReglamentoDeDesarrolloUrbanoZonificacionUsoDeSueloYConstruccionDelMunicipioDeTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Reglamento de Desarrollo Urbano Zonificacion Uso de Suelo y Construcción del Municipio de Torreon';
        $this->fecha                     = '2016-03-30T20:10';
        // El nombre del archivo a crear
        $this->archivo                   = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Tiene por objeto aplicar el ordenamiento urbano previsto por el Plan Director de Desarrollo Urbano, estableciendo las atribuciones, procedimientos, sanciones y normas técnicas para regular el desarrollo urbano, zonificación, usos de suelo y construcción de edificaciones.';
        $this->claves                    = 'IMPLAN, Torreón, Reglamento, Desarrollo, Urbano, Usos de suelo';
        // Para el Organizador
        $this->categorias                = array('Gobierno', 'Infraestructura');
        $this->fuentes                   = array('IMPLAN');
        $this->regiones                  = array('Torreón');
        // Imágenes
        $this->imagen                    = 'reglamento-de-desarrollo-urbano-zonificacion-uso-de-suelo-y-construccion-del-municipio-de-torreon/imagen.png';
        $this->imagen_previa             = 'reglamento-de-desarrollo-urbano-zonificacion-uso-de-suelo-y-construccion-del-municipio-de-torreon/imagen-previa.png';
        // URL de destino
        $this->url                       = 'http://www.trcimplan.gob.mx/sig-planes/reglamento-de-desarrollo-urbano-zonificacion-uso-de-suelo-y-construccion-del-municipio-de-torreon.pdf';
        $this->url_etiqueta              = 'Descargar PDF 8.2 MB';
    } // constructor

} // Clase ReglamentoDeDesarrolloUrbanoZonificacionUsoDeSueloYConstruccionDelMunicipioDeTorreon

?>
