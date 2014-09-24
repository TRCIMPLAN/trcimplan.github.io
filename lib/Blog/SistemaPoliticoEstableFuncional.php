<?php
/*
 * SMIbeta - Sistema Político Estable y Funcional
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
 * Clase SistemaPoliticoEstableFuncional
 */
class SistemaPoliticoEstableFuncional extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-06-10';
        $this->autor         = 'Lic. Rodrigo González Morales';
        $this->nombre        = 'Sistema Político Estable y Funcional';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'sistema-politico-estable-funcional';
        $this->descripcion   = 'Es el subíndice mejor calificado de la zona metropolitana, ya que IMCO nos sitúa en el lugar 11 del ranking.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'sistema-politico-estable-funcional/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="sistema-politico-estable-funcional/imagen.jpg"></span>

<p>Es el subíndice mejor calificado de la zona metropolitana, ya que IMCO nos sitúa en el lugar 11 del ranking. Fundamental para ello es que Torreón y Matamoros cuenten con periodo de cuatro años para los gobiernos municipales. Matamoros por si sólo se ubicaría en el lugar 1 del ranking y Torreón en el 3, rodeado de las demás metrópolis de Coahuila como Saltillo, Monclova-Frontera y Piedras Negras. Sin embargo Lerdo se encuentra en competitividad media en este subíndice y Gómez Palacio en media baja.</p>

<img class="img-responsive contenido-imagen" src="sistema-politico-estable-funcional/sistema-politico.png" alt="Sistema Político">

<p>Además de la duración de los periodos para ediles, este subíndice considera la participación ciudadana en procesos electorales, donde La Laguna indica 46 % del padrón electoral lejos de la participación de 65 % de Campeche pero también de la bajá participación en ciudades como Juárez o Tuxtla Gutiérrez que registraron participación del 27 %.</p>

<img class="img-responsive contenido-imagen" src="sistema-politico-estable-funcional/indicadores.png" alt="Indicadores">

<p>Por último se miden la proporción de secciones electoral con atención electoral o conflicto, siendo de 15 % para la ZML a pesar de que Lerdo y Matamoros no presentan secciones con atención especial. Sin embargo el valor está muy por debajo del 53 % registrado en La Paz, que es la ciudad peor valorada en este indicador.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase SistemaPoliticoEstableFuncional

?>
