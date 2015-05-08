<?php
/*
 * TrcIMPLAN - DESCRIPCION
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
 */

// Namespace
namespace SIGPlanes;

/**
 * Clase PlanDirectorDesarrolloUrbanoMunicipioTorreon
 */
class PlanDirectorDesarrolloUrbanoMunicipioTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Plan Director de Desarrollo Urbano de Torreón Coahuila';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        $this->imagen           = 'plan-director-de-desarrollo-urbano-de-municipio-de-torreon/imagen.jpg';
        $this->imagen_previa    = 'plan-director-de-desarrollo-urbano-de-municipio-de-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'La propuesta del Plan se centra en el objetivo general del Programa Metropolitano de establecer una metrópoli articulada y coherente; fuertemente vinculada con su ámbito regional inmediato (Comarca Lagunera), donde se genera gran parte de su riqueza; que desarrolle en su periferia una ciudad adecuada a las necesidades del siglo XXI y fortalezca sus antiguos centros, con equipamiento e infraestructura para la regeneración urbana.';
     // $this->claves           = '';
     // $this->categorias       = array();
        // El directorio en la raíz donde se guardará el archivo HTML
     // $this->directorio       = '';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
     // $this->nombre_menu      = 'Información Geográfica > Planes';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
     // $this->para_compartir   = true;
        // URL de destino
        $this->url              = 'planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf';
        $this->url_etiqueta     = 'Descargar PDF 4.1 MB';
        // Sin contenido
        $this->contenido        = '';
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, si tiene una imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = sprintf("<img src=\"%s\"><br>\n\n%s", $this->imagen, $this->descripcion);
        } else {
            $this->redifusion   = $this->descripcion;
        }
    } // constructor
/*
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf"><img src="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.png" alt="Plan Director de Desarrollo Urbano de Torreón Coahuila"></a>
      <div class="caption">
        <h3><a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf">Plan Director de Desarrollo Urbano de Torreón Coahuila</a></h3>
        <p>La propuesta del Plan se centra en el objetivo general del Programa Metropolitano de establecer una metrópoli articulada y coherente; fuertemente vinculada con su ámbito regional inmediato (Comarca Lagunera), donde se genera gran parte de su riqueza; que desarrolle en su periferia una ciudad adecuada a las necesidades del siglo XXI y fortalezca sus antiguos centros, con equipamiento e infraestructura para la regeneración urbana.</p>
        <p><a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf" class="btn btn-default" role="button">Descargar PDF 4.1 MB</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    ...
  </div>
</div>
 */
} // Clase PlanDirectorDesarrolloUrbanoMunicipioTorreon

?>
