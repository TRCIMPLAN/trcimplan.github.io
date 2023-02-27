<?php
/**
 * TrcIMPLAN Sitio Web - PlanDeMovilidadActivaDic
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
 * Clase PlanDeMovilidadActivaDic
 */
class PlanDeMovilidadActivaDic extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Plan de Movilidad Activa';
        $this->fecha                     = '2022-12-06T13:50';
        // El nombre del archivo a crear
        $this->archivo                   = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Este Plan pretende ser el instrumento de planeación estratégica que diseñe y desarrolle las políticas, metas, proyectos y programas en materia de movilidad para modos no motorizados, para así, programar, organizar y priorizar las acciones necesarias para lograr un sistema de movilidad urbana sustentable. - PDF 22.9 MB </br></br>';
        $this->claves                    = 'IMPLAN, Torreón, Plan, Movilidad, Activa, La Laguna';
        // Para el Organizador
        $this->categorias                = array('Gobierno', 'Movilidad');
        $this->fuentes                   = array('IMPLAN');
        $this->regiones                  = array('Torreón');
        // Imágenes
        $this->imagen                    = 'plan-de-movilidad-activa-2022/imagen.png';
        $this->imagen_previa             = 'plan-de-movilidad-activa-2022/imagen-previa.png';
        // URL de destino
        $this->url                       = 'http://www.trcimplan.gob.mx/sig-planes/plan-de-movilidad-activa-dic.pdf';
        $this->url_etiqueta              = 'Descargar PDF 22.9 MB';
    } // constructor

} // Clase PlanDeMovilidadActivaDic

?>
