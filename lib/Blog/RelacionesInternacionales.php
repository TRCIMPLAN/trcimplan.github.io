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
 * Clase RelacionesInternacionales
 */
class RelacionesInternacionales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-06-30';
        $this->autor         = 'Lic. Rodrigo González Morales';
        $this->nombre        = 'Relaciones Internacionales';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'relaciones-internacionales';
        $this->descripcion   = 'Análisis de las cuestiones internacionales como la inversión extranjera, el flujo de pasajeros y la ausencia de puertos o frontera con otro país.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'relaciones-internacionales/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="relaciones-internacionales/imagen.jpg"></span>

<p>En este subíndice, la ZML pasó de ubicarse en el lugar 23 en el ICU 2007 a ocupar el lugar 54 en el ICU 2012. De los municipios de la zona metropolitana, el mejor posicionado en cuanto a relaciones internacionales es Gómez Palacio, el cual por sí mismo ocuparía el lugar número 11, mientras que Torreón se ubicaría en el lugar 70.</p>

<img class="img-responsive contenido-imagen" src="relaciones-internacionales/relaciones-internacionales.png" alt="Relaciones Internacionales">

<p>Este subíndice evalúa la inversión extranjera directa (IED), el flujo de pasajeros del o hacia el extranjero, la comunicación con el extranjero y si la ciudad es fronteriza o portuaria.</p>

<p>En cuanto al primer indicador mencionado, éste se calcula aplicando a la Inversión extranjera directa neta del estado la tasa de participación del municipio en la producción estatal. Gómez Palacio es el municipio de la zona metropolitana con mejor resultado, captando 6,247 millones de dólares anuales promedio. Sin embargo Colima, el mejor valor a nivel nacional para este indicador, capta 29,083.89 millones de dólares.</p>

<p>En el flujo de pasajeros, ocupamos el lugar 22 con 36 pasajeros por cada mil habitantes. El número total de pasajeros es de 44,253 por lo que en el municipio de Torreón el dato sube a 69 pasajeros por cada mil habitantes. En cuanto a comunicación con el extranjero, nuestra zona metropolitana ocupa el lugar 65 con 14 piezas de correspondencia por cada mil habitantes, cuando el primer lugar en este indicador es de 866 piezas por cada mil habitantes.</p>

<img class="img-responsive contenido-imagen" src="relaciones-internacionales/indicadores.png" alt="Indicadores">

<p>Finalmente, otro factor que considera el IMCO como ventaja competitiva es si la ciudad es fronteriza o portuaria, por lo cual tanto la ZML como sus municipios por separado presentan el valor de cero (0) en éste indicador.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase RelacionesInternacionales

?>
