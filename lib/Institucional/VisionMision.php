<?php
/*
 * SMIbeta - Institucional Visión/Misión
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
namespace Institucional;

/**
 * Clase VisionMision
 */
class VisionMision extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Visión / Misión';
        $this->directorio  = 'institucional';
        $this->archivo     = 'vision-mision';
        $this->descripcion = 'La Visión y la Misión del IMPLAN Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Vision, Mision';
        $this->categorias  = array('Institucional');
        $this->encabezado  = '<img class="img-responsive" src="vision-mision/encabezado.jpg">';
        $this->contenido   = <<<FINAL
<h3>Visión</h3>

<p>Ser una institución líder en materia de planeación estratégica, reconocida a nivel internacional por su efectividad como organismo facilitador del desarrollo sustentable y competitivo de la metrópoli.</p>

<h3>Misión</h3>

<p>Planear estratégicamente con un enfoque sistémico e integral el desarrollo sustentable y competitivo de la región a largo plazo, a través de procesos participativos entre los diferentes sectores de la población y gobierno, con el fin de mejorar la calidad de vida de sus habitantes.</p>
FINAL;
        $this->javascript  = <<<FINAL
FINAL;
    } // constructor

} // Clase VisionMision

?>
