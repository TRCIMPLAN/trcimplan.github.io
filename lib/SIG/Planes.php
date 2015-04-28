<?php
/*
 * TrcIMPLAN Sitio Web - Planes
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
namespace SIG;

/**
 * Clase Planes
 */
class Planes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Planes';
     // $this->autor            = 'Autor';
     // $this->fecha            = '2014-00-00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'planes';
     // $this->imagen_previa    = 'planes/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="planes/encabezado.jpg">';
        $this->encabezado_color = '#008000';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Documentación sobre los Planes de desarrollo de diversos propósitos.';
        $this->claves           = 'IMPLAN, Torreon, Planes';
        $this->categorias       = array('Planes');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'sig';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Información Geográfica > Planes';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = false;
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf"><img src="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.png" alt="Plan Director de Desarrollo Urbano de Torreón Coahuila"></a>
      <div class="caption">
        <h3><a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf">Plan Director de Desarrollo Urbano de Torreón Coahuila</a></h3>
        <p>La propuesta del Plan se centra en el objetivo general del Programa Metropolitano de establecer una metrópoli articulada y
          coherente; fuertemente vinculada con su ámbito regional inmediato (Comarca Lagunera), donde se genera gran parte de su riqueza;
          que desarrolle en su periferia una ciudad adecuada a las necesidades del siglo XXI y fortalezca sus antiguos centros, con
          equipamiento e infraestructura para la regeneración urbana.</p>
        <p><a href="planes/plan-director-de-desarrollo-urbano-de-municipio-de-torreon.pdf" class="btn btn-default" role="button">Descargar PDF 4.1 MB</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="http://www.torreon.gob.mx/pdf/PIMUS_LAGUNA.pdf"><img src="planes/estudio-plan-integral-movilidad-urbana-sustentable-laguna.png" alt=""></a>
      <div class="caption">
        <h3><a href="http://www.torreon.gob.mx/pdf/PIMUS_LAGUNA.pdf">Plan Integral de Movilidad Urbana Sustentable de La Laguna</a></h3>
        <p>El Plan Integral de Movilidad Urbana Sustentable de La Laguna (PIMUS) es un conjunto de acciones para implementar las distintas formas de transporte sustentable, éstas son, a pie, bicicleta y transporte público. Favoreciendo el crecimiento económico, el desarrollo social y la defensa del medio ambiente; lo cual llevará a una mejor calidad de vida para los ciudadanos.</p>
        <p><a href="http://www.torreon.gob.mx/pdf/PIMUS_LAGUNA.pdf" class="btn btn-default" role="button">Descargar PDF 33.7 MB</a></p>
      </div>
    </div>
  </div>
</div>
FINAL;
        $this->javascript      = '';
    } // constructor

} // Clase Planes

?>
