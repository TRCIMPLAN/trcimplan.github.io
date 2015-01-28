<?php
/*
 * SMIbeta - Prevención del delito mediante la construcción del espacio público
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
namespace Blog;

/**
 * Clase PrevencionDelitoEspacioPublico
 */
class PrevencionDelitoEspacioPublico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        //
        //
        //
        $carrusel1 = <<<FINAL
<div id="carousel-1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="prevencion-delito-espacio-publico/01-muro-ampliacion-senderos-800.jpg" alt="Ampliacion Senderos Torreon">
      <div class="carousel-caption">
        <p>El muro es el símbolo más visible del miedo. Ampliación Senderos, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/02-tajito-torreon-800.jpg" alt="El tajito Torreon">
      <div class="carousel-caption">
        <p>Este espacio no alenta el uso de la comunidad que lo rodea. El tajito, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/03-disposicion-parques-800.jpg" alt="Ampliacion Senderos Torreon">
      <div class="carousel-caption">
        <p>La disposición de parques en el espacio no garantiza la apropiación de este por la población. Ampliación Senderos, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/04-participacion-ciudadana-800.jpg" alt="Zaragoza Sur">
      <div class="carousel-caption">
        <p>La participación ciudadana tiene la capacidad de construir compromisos. Zaragoza Sur, Torreón, 2009 Tesis universitaria.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/05-participacion-grupos-vulnerables-800.jpg" alt="Zaragoza Sur">
      <div class="carousel-caption">
        <p>La participación de los grupos vulnerables es de vital importancia. Zaragoza Sur, Torreón, 2009 Tesis universitaria.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/06-condominio-anhattan-800.jpg" alt="Condominio Los Manhattan">
      <div class="carousel-caption">
        <p>Las marcas negativas dentro del espacio fomentan la percepción de inseguridad. Condominio Los Manhattan, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/07-percepcion-seguridad-inseguridad-800.jpg" alt="Espacios urbanos">
      <div class="carousel-caption">
        <p>Los espacios urbanos pueden detonar percepción de seguridad o inseguridad.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/08-diferentes-aspiraciones-800.jpg" alt="Zaragoza Sur">
      <div class="carousel-caption">
        <p>Ninguna comunidad es igual a otra y cada una tiene en conjunto diferentes aspiraciones. Zaragoza Sur, Torreón, 2009 Tesis universitaria.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/09-dignificen-comunidades-800.jpg" alt="Zaragoza Sur">
      <div class="carousel-caption">
        <p>Se requieren espacios públicos que dignificen las comunidades. Zaragoza Sur, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/10-taller-participacion-ciudadana-800.jpg" alt="Taller de participación ciudadana">
      <div class="carousel-caption">
        <p>Taller de participación ciudadana lidereado por iniciativa de planeación en comunidades TOGETHER NORTH JERSEY en Nueva Jersey, EUA.</p>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

FINAL;
        //
        //
        //
        $carrusel2 = <<<FINAL
<div id="carousel-2" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="prevencion-delito-espacio-publico/01-muro-ampliacion-senderos-800.jpg" alt="Ampliacion Senderos Torreon">
      <div class="carousel-caption">
        <p>El muro es el símbolo más visible del miedo. Ampliación Senderos, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/02-tajito-torreon-800.jpg" alt="El tajito Torreon">
      <div class="carousel-caption">
        <p>Este espacio no alenta el uso de la comunidad que lo rodea. El tajito, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/03-disposicion-parques-800.jpg" alt="Ampliacion Senderos Torreon">
      <div class="carousel-caption">
        <p>La disposición de parques en el espacio no garantiza la apropiación de este por la población. Ampliación Senderos, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/04-participacion-ciudadana-800.jpg" alt="Zaragoza Sur">
      <div class="carousel-caption">
        <p>La participación ciudadana tiene la capacidad de construir compromisos. Zaragoza Sur, Torreón, 2009 Tesis universitaria.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/05-participacion-grupos-vulnerables-800.jpg" alt="Zaragoza Sur">
      <div class="carousel-caption">
        <p>La participación de los grupos vulnerables es de vital importancia. Zaragoza Sur, Torreón, 2009 Tesis universitaria.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/06-condominio-anhattan-800.jpg" alt="Condominio Los Manhattan">
      <div class="carousel-caption">
        <p>Las marcas negativas dentro del espacio fomentan la percepción de inseguridad. Condominio Los Manhattan, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/07-percepcion-seguridad-inseguridad-800.jpg" alt="Espacios urbanos">
      <div class="carousel-caption">
        <p>Los espacios urbanos pueden detonar percepción de seguridad o inseguridad.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/08-diferentes-aspiraciones-800.jpg" alt="Zaragoza Sur">
      <div class="carousel-caption">
        <p>Ninguna comunidad es igual a otra y cada una tiene en conjunto diferentes aspiraciones. Zaragoza Sur, Torreón, 2009 Tesis universitaria.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/09-dignificen-comunidades-800.jpg" alt="Zaragoza Sur">
      <div class="carousel-caption">
        <p>Se requieren espacios públicos que dignificen las comunidades. Zaragoza Sur, Torreón.</p>
      </div>
    </div>
    <div class="item">
      <img src="prevencion-delito-espacio-publico/10-taller-participacion-ciudadana-800.jpg" alt="Taller de participación ciudadana">
      <div class="carousel-caption">
        <p>Taller de participación ciudadana lidereado por iniciativa de planeación en comunidades TOGETHER NORTH JERSEY en Nueva Jersey, EUA.</p>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

FINAL;
        //
        //
        //
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Prevención del delito mediante la construcción del espacio público';
        $this->autor            = 'Arq. Victoria Aranzábal';
        $this->fecha            = '2015-01-22';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'prevencion-delito-espacio-publico';
        $this->imagen_previa    = 'prevencion-delito-espacio-publico/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="prevencion-delito-espacio-publico/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = '.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Infraestructura', 'Bienestar');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'revisar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
     // $this->para_compartir   = true;
        // El contenido HTML y el JavaScript
        $this->contenido        = implode("\n", array(
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte1.md'),
            $carrusel1,
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte2.md'),
            $carrusel2,
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte3.md')));
        $this->javascript       = '';
    } // constructor

} // Clase PrevencionDelitoEspacioPublico

?>
