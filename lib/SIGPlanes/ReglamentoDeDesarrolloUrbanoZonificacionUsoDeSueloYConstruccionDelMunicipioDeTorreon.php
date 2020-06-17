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
        $this->nombre                    = 'Reglamento de Desarrollo Urbano y Construcción de Torreón';
        $this->fecha                     = '2020-06-17T20:10';
        // El nombre del archivo a crear
        $this->archivo                   = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Tiene por objeto aplicar el desarrollo urbano previsto por las nuevas disposiciones normativas de la Nueva Agenda Urbana y la Ley General y Estatal de Asentamientos Humanos, Ordenamiento Territorial y Desarrollo Urbano, estableciendo las atribuciones, procedimientos, sanciones y normas técnicas en toda acción urbana. - PDF 10.6 MB';
        $this->claves                    = 'IMPLAN, Torreón, Reglamento, Desarrollo, Urbano, Usos de suelo';
        // Para el Organizador
        $this->categorias                = array('Gobierno', 'Infraestructura');
        $this->fuentes                   = array('IMPLAN');
        $this->regiones                  = array('Torreón');
        // Imágenes
        $this->imagen                    = 'reglamento-de-desarrollo-urbano-y-construccion-de-torreon/imagen.png';
        $this->imagen_previa             = 'reglamento-de-desarrollo-urbano-y-construccion-de-torreon/imagen-previa.png';
        // URL de destino
        $this->url                       = 'http://www.trcimplan.gob.mx/sig-planes/reglamento-de-desarrollo-urbano-y-construccion-de-torreon.pdf';
        $this->url_etiqueta              = 'Descargar PDF 10.6 MB';
    } // constructor

} // Clase ReglamentoDeDesarrolloUrbanoZonificacionUsoDeSueloYConstruccionDelMunicipioDeTorreon

?>
