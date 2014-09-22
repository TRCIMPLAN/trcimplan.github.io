<?php
/*
 * SMIbeta - Transformación Urbana
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
 * Clase TransformacionUrbana
 */
class TransformacionUrbana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-09-22';
        $this->autor         = 'Autor';
        $this->nombre        = 'Transformación Urbana';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'transformacion-urbana';
        $this->descripcion   = 'Descripción.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'directorio/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="transformacion-urbana/imagen.jpg"></span>

En su número de octubre de 2014, la prestigiada revista Bicycling presenta su clasificación de ciudades usamericanas. Las clasifica en función de qué tan buenas son para moverse en bicicleta. Un ejercicio bianual que cuenta con un gran interés de los ayuntamientos para que su ciudad aparezca en los primeros lugares. Un ejercicio que desvela una franca competencia vistos los cambios que esta clasificación experimenta cada dos años.

Para 2014, las cinco ciudades en las que mejor se puede uno mover en bicicleta son: Nueva York, Chicago, Mineápolis, Portland y Washington. Entre las ciudades conocidas por el público lagunero podemos citar están Austin (lugar 11), Tucson (18), Los Angeles (28) y San Antonio (48). Esta clasificación se apoya en datos duros como el número de instalaciones para bicicletas por milla cuadrada, el número de habitantes por bici pública, el número de negocios biciamigables y el índice de seguridad. Una historia común en casi todas las ciudades reseñadas fue la confluencia de tres factores: grupos ciudadanos organizados, una crisis de movilidad y autoridades dispuestas a encontrar soluciones innovadoras.

En Nueva York por ejemplo, dos acciones clave fueron imponer un límite de velocidad de 40 kilómetros por hora para toda la ciudad y un programa de multas agresivo. Esto, y los nuevos bicicarriles, hicieron que más neoyorquinos y neoyorquinas se animaran a pedalear pues la percepción de riesgo se redujo. Una ONG, Bike New York dio clases gratis y capacitó a 16,000 nuevos ciclistas. El número de viajes en bici se duplicó, el número de coches se redujo, los embotellamientos en las horas pico se volvieron menos frecuentes. El nuevo alcalde quiere intensificar este programa y triplicar el número de viajes en bici.

En Chicago se instrumentó un programa de cámaras y multas que redujo en un 90% el número de coches a velocidades excesivas y elevó a mil dólares la multa por golpear a un ciclista al abrir descuidadamente la puerta de un coche. En caso tras caso se advierte que, para estimular el uso de la bici, las autoridades hacen dos cosas: construyen nuevas infraestructuras ciclistas y reducen la velocidad de los coches. En caso tras caso se advierte también la llamada paradoja de la multitud: entre más ciclistas, menos accidentes. Una paradoja que no es tal pues está claro que más ciclistas en las calles conlleva una mayor interacción y convivencia corroborando que la educación vial se da en las interacciones diarias. Y si esa convivencia se da con reglas claras que se hacen cumplir, mejor.

Las motivaciones de los alcaldes para promover el uso de la bicicleta se centran en la reducción de los problemas asociados al uso del coche: embotellamientos, accidentes y problemas de salud asociados a la contaminación y al sedentarismo. Todos estos problemas tienen un alto costo social y económico para las sociedades que los padecen y fuerzan a los ayuntamientos a hacer costosísimas inversiones como estacionamientos, viaductos y puentes.

El caso de Los Ángeles es un caso curioso. Ahí, el impulso definitivo al programa pro-bici de Los Ángeles se dio cuando el alcalde, Antonio Villaraigosa fue atropellado por un taxi y se fracturó el codo. Gracias a la intervención inmediata de los activistas pro-bici, el tema de la seguridad ciclista saltó a los primeros lugares del interés público y el resto, como dicen, es historia.En Boulder, Colorado, 12 % de la población se transporta diario en bici.

Una proporción elevadísima para Estados Unidos pero muy baja para ciudades como Copenhague o Amsterdam. No es casualidad que tres cuartas partes de la población de Boulder cumple la cuota mínima recomendable de ejercicio aeróbico y que la tasa de obesidad es la mitad del promedio nacional. Quienes nos movemos en bici sabemos que llegas a tu trabajo feliz y despierto, que te enfermas menos y que eres más productivo. Cada historia detrás de cada ciudad de la lista de Bicycling, es una historia de regeneración urbana.

Una historia de grandes ganancias -con poca inversión- para todos los habitantes de la ciudad, no sólo para los ciclistas. Cada historia es una historia positiva para la economía, la productividad, la salud, la convivencia y el tráfico. Si al inicio, en varias de estas ciudades hubo reticencias y hasta franca oposición, estas se han ido disolviendo poco a poco.¿Cómo trasladar la experiencia narrada en el número de octubre de Bicycling a las ciudades laguneras? ¿Qué nos hace falta aquí para empezar a tener los avances de allá? Tenemos los problemas que la bici puede aliviar: embotellamientos, crispación, sedentarismo, obesidad, mala calidad del aire.

Tenemos grupos organizados y activistas como Ruedas del Desierto, pero algo nos falta dentro de los ayuntamientos. Aún cuando hay funcionarios empáticos y conocedores, los hay también aquellas y aquellos que sólo ven en la bici una moda de la cual colgarse y sacar raja política. Lo que nos falta, creo, es el compromiso claro y directo de los alcaldes que acabe de inclinar el fiel de la balanza hacia la transformación urbana de La Laguna. Una transformación que no sólo se dará con la bici pero en donde la bici tiene un papel fundamental.

twitter/@fvaldesp

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase TransformacionUrbana

?>
