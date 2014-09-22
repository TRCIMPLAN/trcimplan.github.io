<?php
/*
 * SMIbeta - Equidad de Género en Informática
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
 * Clase EquidadGeneroInformatica
 */
class EquidadGeneroInformatica extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-09-19';
        $this->autor         = 'Ing. Guillermo Valdés Lozano';
        $this->nombre        = 'Equidad de Género en Informática';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'equidad-genero-informatica';
        $this->descripcion   = 'Aunque vivimos con el mayor acceso a Internet y el auge las Ciencias Computacionales significan más desarrollo y trabajo, el género femenino tiene muy poca participación en el sector.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'equidad-genero-informatica/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="equidad-genero-informatica/imagen.jpg"></span>

<h3>Equidad de Género en el Trabajo</h3>

<p>Nuestro país ha tenido avances en la igualdad en el trabajo, gracias a ello, las mujeres tienen labores que antes se consideraban exclusivas para los hombres. Esto es positivo, pero México aun enfrenta varios retos como la <strong>discriminación, violencia de género y el equilibrio de los salarios.</strong></p>

<h3>Género Femenino en la Informática y Ciencias</h3>

A pesar de las evidentes ventajas, muchas niñas ni siquiera se llegan a plantear una carrera en las TIC (Tecnologías de la Información y Comunicación). Hay una falta de información entre las estudiantes, profesores y padres de lo que una carrera en las TIC puede ofrecer.
    Este problema también está presente en las Ciencias.
    Sólo 6.6% de los físicos del CERN son mujeres.

<h3>Usuarios de Internet en México</h3>

Captura de pantalla 2014-09-19 a la(s) 12.34.25

Usuarios de Internet en México

Captura de pantalla 2014-09-19 a la(s) 12.34.36

<h3>Discriminación de Género</h3>

    Quienes discriminan designan un trato diferencial o inferior en cuanto a los derechos y las consideraciones sociales de las personas, organizaciones y estados.
    Hacen esta diferencia ya sea por el color de piel, etnia, sexo, edad, cultura, religión o ideología.

<h3>Poco interés del género femenino en las TICs</h3>

¿Qué lo provoca?…

    La educación en la mayoría de los hogares mexicanos las desmotiva a aspirar una profesión.
    Los juguetes y la publicidad acentúan este estereotipo.
    La falsa idea de que son malas para las matemáticas y problemas razonados.
    Y creer que las TICs son sólo para hombres.

<h3>Matrícula Femenina en Licenciaturas de C.C.I. en EE.UU.</h3>

Captura de pantalla 2014-09-19 a la(s) 12.35.15

<h3>Son pocas mujeres pero muy inteligentes</h3>

Captura de pantalla 2014-09-19 a la(s) 12.35.26

<h3>Reporte de Diversidad de Google</h3>

Captura de pantalla 2014-09-19 a la(s) 12.36.11

<h3>Oportunidades en Software Libre</h3>

Captura de pantalla 2014-09-19 a la(s) 12.36.20

<h3>Tecnologías Emergentes</h3>

    La humanidad cambió con la informática y el internet.
    Los vehículos autónomos pueden salir dentro de dos años. Se estima que conviviremos con robots en veinte años.
    Nanotecnología: estructuras moleculares y máquinas microscópicas.
    Biotecnología: dominio de los genes y simbiosis entre seres vivos y máquinas.

Captura de pantalla 2014-09-19 a la(s) 12.36.37

<h3>Para que haya más mujeres en la Informática y las Ciencias</h3>

    Como padres: inspirar, educar y equipar a nuestras hijas e hijos por igual para que adquieran las habilidades que necesitarán en el futuro.
    Como educadores: cambiar la actitud y descartar estereotipos; invitar a niñas a visitar empresas donde conozcan los profesionales TIC y ver cómo trabajan.
    Como empresarios: respetar la ley del trabajo (a trabajos iguales, igual salario) así como contratar por actitud, habilidad y conocimiento.
    Como gobernantes: se dió un primer paso con la ley de equidad de género en los diputados. Sigue modernizar el sistema educativo.

<h3>Referencias</h3>

Niñas en las TIC http://girlsinict.org

Celebrating women in particle physics

http://internationalwomensday.web.cern.ch

Power and prejudice: women in physics

http://cerncourier.com/cws/article/cern/30150

Wikipedia: Discriminación https://es.wikipedia.org/wiki/Discriminación

Estudios de la Asociación Mexicana de Internet

https://www.amipci.org.mx/es/estudios

Carnegie Mellon urges young women to consider computer science

http://www.qatar.cmu.edu/news/view/1296

Degrees in C.I.S. conferred by sex of student http:
//nces.ed.gov/programs/digest/d12/tables/dt12_349.asp

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase EquidadGeneroInformatica

?>
