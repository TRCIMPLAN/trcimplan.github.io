<?php
/*
 * SMIbeta - DESCRIPCION
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
namespace Base;

/**
 * Clase PlantillaInicial
 */
class PlantillaInicial extends Plantilla {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $menu_principal_logo;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $mensaje_oculto;
    // public $pie;
    // public $titulo;
    // public $autor;
    // public $descripcion;
    // public $claves;
    // public $ruta;
    // public $imagen_previa;
    // public $menu_principal;
    // public $encabezado;
    // public $contenido;
    // public $javascript;

    /**
     * Carrusel
     *
     * @return string Código HTML
     */
    protected function carrusel() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<div id="carrusel">';
        $a[] = '  <div class="container">';
        $a[] = '    <div class="carousel slide" data-ride="carousel">';
        $a[] = '      <ol class="carousel-indicators">';
        $a[] = '        <li data-target="#carrusel" data-slide-to="0" class="active"></li>';
        $a[] = '        <li data-target="#carrusel" data-slide-to="1"></li>';
        $a[] = '        <li data-target="#carrusel" data-slide-to="2"></li>';
        $a[] = '      </ol>';
        $a[] = '      <div class="carousel-inner">';
        $a[] = '        <div class="item active">';
        $a[] = '          <img src="imagenes/carrusel-smi.jpg" alt="Sistema Metropolitano de Indicadores">';
        $a[] = '        </div>';
        $a[] = '        <div class="item">';
        $a[] = '          <img src="imagenes/carrusel-sig.jpg" alt="Sistema de Información Geográfica">';
        $a[] = '        </div>';
        $a[] = '      </div>';
        $a[] = '      <a class="left carousel-control" href="#carrusel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>';
        $a[] = '      <a class="right carousel-control" href="#carrusel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>';
        $a[] = '    </div>';
        $a[] = '  </div>';
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // carrusel

    /**
     * Destacado
     *
     * @return string Código HTML
     */
    protected function destacado() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<!-- DESTACADO INICIA -->';
        $a[] = '<div id="destacado">';
        $a[] = '  <div class="container">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="col-md-9">';
        $a[] = '        <div class="row">';
        $a[] = '          <!-- DESTACADO IZQUIERDA INICIA -->';
        $a[] = '          <div class="col-md-6">';
        $a[] = '            <a href="proyectos/smi.html"><img class="img-responsive destacado-izquierda" src="imagenes/destacado-boton-smi.jpg" alt="Sistema Metropolitano de Indicadores"></a>';
        $a[] = '            <a href="proyectos/sig.html"><img class="img-responsive destacado-izquierda" src="imagenes/destacado-boton-sig.jpg" alt="Sistema de Información Geográfica"></a>';
        $a[] = '          </div>';
        $a[] = '          <!-- DESTACADO IZQUIERDA TERMINA -->';
        $a[] = '          <!-- DESTACADO CENTRAL INICIA -->';
        $a[] = '          <div class="col-md-6">';
        //
        $a[] = '            <div class="media">';
        $a[] = '              <a class="pull-left" href="blog/movilidad-laboral-cotidiana-en-la-zml.html"></a>';
        $a[] = '              <div class="media-body">';
        $a[] = '                <h4><a href="blog/movilidad-laboral-cotidiana-en-la-zml.html">Movilidad laboral cotidiana en la ZML</a></h4>';
        $a[] = '                <p>En una zona metropolitana en donde los límites municipales son divisiones imaginarias, en términos prácticos, para las necesidades de la población el traslado de [&hellip;]</p>';
        $a[] = '                <p class="pull-left autor-fecha">Lic. Luis A. Gutiérrez Arizpe.</p>';
        $a[] = '                <p class="pull-right autor-fecha"><a href="blog/movilidad-laboral-cotidiana-en-la-zml.html">Leer más</a></p>';
        $a[] = '              </div>';
        $a[] = '            </div>';
        //
        $a[] = '            <div class="text-center"><button type="button" class="btn boton" onclick="javascript:location.href=\'blog/index.html\'">Todas las publicaciones</button></div>';
        //
        $a[] = '          </div>';
        $a[] = '          <!-- DESTACADO CENTRAL TERMINA -->';
        $a[] = '        </div>';
        $a[] = '        <!-- BARRA ROSA INICIA -->';
        $a[] = '        <div class="barra-rosa">';
        $a[] = '          <div class="barra-rosa-block">';
        $a[] = '            <div class="barra-rosa-vinculo">';
        $a[] = '              <a href="institucional/reglamentos.html"><img class="img-responsive" src="imagenes/promocion-planes-reglamentos.png" alt="Reglamentos">REGLAMENTOS</a>';
        $a[] = '            </div>';
        $a[] = '          </div>';
        $a[] = '          <div class="barra-rosa-block">';
        $a[] = '            <div class="barra-rosa-vinculo">';
        $a[] = '              <a href="proyectos/sig.html"><img class="img-responsive" src="imagenes/promocion-sig.png" alt="SIG">SIG</a>';
        $a[] = '            </div>';
        $a[] = '          </div>';
        $a[] = '          <div class="barra-rosa-block">';
        $a[] = '            <div class="barra-rosa-vinculo">';
        $a[] = '              <a href="proyectos/smi.html"><img class="img-responsive" src="imagenes/promocion-indicadores.png" alt="Indicadores">INDICADORES</a>';
        $a[] = '            </div>';
        $a[] = '          </div>';
        $a[] = '          <div class="barra-rosa-block">';
        $a[] = '            <div class="barra-rosa-vinculo">';
        $a[] = '              <a href="proyectos/banco-proyectos.html"><img class="img-responsive" src="imagenes/promocion-proyectos.png" alt="Proyectos">BANCO DE PROYECTOS</a>';
        $a[] = '            </div>';
        $a[] = '          </div>';
        $a[] = '          <div class="barra-rosa-block">';
        $a[] = '            <div class="barra-rosa-vinculo">';
        $a[] = '              <a href="http://www.icai.org.mx/ipmn/dependencias/impyc" target="_blank"><img class="img-responsive" src="imagenes/promocion-transparencia.png" alt="Transparencia">TRANSPARENCIA</a>';
        $a[] = '            </div>';
        $a[] = '          </div>';
        $a[] = '        </div>';
        $a[] = '        <!-- BARRA ROSA TERMINA -->';
        $a[] = '      </div>';
        $a[] = '      <!-- DESTACADO DERECHA INICIA -->';
        $a[] = '      <div class="col-md-3">';
        $a[] = '        <a href="blog/metropoli-del-conocimiento.html"><img class="img-responsive destacado-derecha" src="imagenes/metropoli-del-conocimiento.jpg" alt="Metropoli del Conocimiento"></a>';
        $a[] = '        <a href="proyectos/smi.html"><img class="img-responsive destacado-derecha" src="imagenes/indicador-osc-400x400.jpg" alt="Torreón cuenta con 324 Organizaciones de la Sociedad Civil" /></a>';
        $a[] = '      </div>';
        $a[] = '      <!-- DESTACADO DERECHA TERMINA -->';
        $a[] = '    </div>';
        $a[] = '  </div>';
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // destacado

    /**
     * Elaborar Contenido
     *
     * @return string Código HTML
     */
    protected function elaborar_contenido() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = $this->carrusel();
        $a[] = $this->destacado();
        // Entregar
        return implode("\n", $a);
    } // elaborar_contenido

} // Clase PlantillaInicial

?>
