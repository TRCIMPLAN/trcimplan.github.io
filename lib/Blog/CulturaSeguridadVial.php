<?php
/*
 * SMIbeta - DESCRIPCION
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 * Clase CulturaSeguridadVial
 */
class CulturaSeguridadVial extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Cultura y seguridad vial';
        $this->autor            = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha            = '2014-10-22';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'cultura-seguridad-vial';
        $this->imagen_previa    = 'cultura-seguridad-vial/imagen-previa.png';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="cultura-seguridad-vial/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'La cultura vial se refiere a la construcción de una convivencia armoniosa, responsable y de respeto entre todos los que hacemos uso de las vías de tránsito, sean estas aceras, rutas, caminos, ciclo vías, etc.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Transporte', 'Seguridad', 'Movilidad', 'Vialidad');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL
<span class="contenido-imagen-previa"><img src="cultura-seguridad-vial/imagen.png"></span>

<p>La cultura vial se refiere a la construcción de una convivencia armoniosa, responsable y de respeto entre todos los que hacemos uso de las vías de tránsito, sean estas aceras, rutas, caminos, ciclo vías, etc.</p>

<p>También hace referencia al  hecho de que comprendamos cuales son nuestros deberes y derechos en el uso de estas vías, sobre todo  porque cualquiera de nosotros, en cualquier momento puede jugar un rol de conductor, ciclista, motociclista, peatón o aún más, de un peatón con capacidades diferentes.</p>

<p>De esta manera, la cultura vial hace referencia a los comportamientos humanos en las vías, en los espacios de movilidad, no juzga si son correctos o incorrectos, lo que importa es la manera en que las colectividades se expresan en esos espacios.</p>

<p>En este sentido la cultura vial se relaciona con la seguridad vial, esta última hace referencia a la manera en que podemos atender los riesgos en las vías, a la forma en que enfrentamos dichos riesgos para prevenir accidentes o bien, que el impacto en vidas humanas sea mínimo.</p>

<p>Podemos decir entonces que la manera en que nos comportamos en las distintas vías, provocará un mayor o menor número de riesgos en la interacción con los otros y estos riesgos serán mínimos o no de acuerdo a la manera en que nos movamos o nos comportamos.</p>

<p>Si bien es cierto que la cultura vial aporta una serie de aspectos importantes en cuanto al comportamiento adecuado en las vías, es fundamental entender  que  estos planteamientos, están orientados a la seguridad vial, es decir, a la prevención de accidentes de tránsito o la minimización de sus efectos, especialmente para la vida y la salud de las personas.</p>

<p>En lo que respecta a la Zona Metropolitana de la Laguna (ZML) los accidentes han tenido un comportamiento diferente, que si bien es cierto, en algunos municipios no es preocupante, en otros como Torreón y Gómez Palacio no deja de llamar la atención la cantidad de los mismos.</p>

<img class="img-responsive contenido-imagen" src="cultura-seguridad-vial/accidentes-transito-tasa-accidentes-zml-2013.png" alt="Accidentes de Tránsito en la ZML durante 2013, Tasa de accidentes por 100 mil habitantes">

<img class="img-responsive contenido-imagen" src="cultura-seguridad-vial/cantidad-accidentes-zml-2013.png" alt="Cantidad de Accidentes en la ZML en 2013">

<img class="img-responsive contenido-imagen" src="cultura-seguridad-vial/tasa-accidentes-zml-2013.png" alt="Tasa de Accidentes en la ZML en 2013">

<p>De la mayor proporción de accidentalidad en los municipios de Torreón y Gómez Palacio, se puede inferir que se da toda vez que dichos municipios reciben diariamente el mayor número de automovilistas de los municipios vecinos, sin que el territorio ni la ingeniería e infraestructura vial sean suficientes para ello, lo cual se sustenta en los flujos de la movilidad laboral previamente documentados. (Ver <a href="http://trcimplan.gob.mx/blog/movilidad-laboral-cotidiana-zml.html">Gutiérrez Arizpe 2014</a>).</p>

<p>Podemos concluir que como en muchos otros aspectos de la zona metropolitana de la laguna, es impostergable la construcción, implementación y seguimiento de una política pública sobre seguridad vial encaminada a la protección de la vida humana.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase CulturaSeguridadVial

?>
