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
namespace Contacto;

/**
 * Clase Contacto
 */
class Contacto extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-05-01';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Contacto';
        $this->nombre_menu   = 'Contacto';
        $this->directorio    = 'contacto';
        $this->archivo       = 'contacto';
        $this->descripcion   = 'Redes sociales, correos electrónicos y teléfonos del IMPLAN Torreón.';
        $this->claves        = 'IMPLAN, Torreon, Contacto, email, Redes Sociales, Teléfono';
     // $this->imagen_previa = 'directorio/imagen-previa.jpg';
        $this->categorias    = array('Contacto');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<h4>Redes sociales</h4>

<ul>
    <li>Twitter <a href="http://www.twitter.com/trcimplan" target="_blank">@trcimplan</a></li>
    <li>Facebook <a href="https://facebook.com/trcimplan" target="_blank">/trcimplan</a></li>
</ul>

<h4>Correos electrónicos</h4>

<ul>
    <li>Información general:<br />
      <a href="mailto:info@trcimplan.mx">info@trcimplan.mx</a></li>
    <li>Eduardo Holguín, Director General:<br />
      <a href="mailto:eholguin@trcimplan.mx">eholguin@trcimplan.mx</a></li>
    <li>Luis Campos, Director de Planeacíon Urbana:<br />
      <a href="mailto:lcampos@trcimplan.mx">lcampos@trcimplan.mx</a></li>
    <li>Rodrigo González, Director de Investigación Estratégica:<br />
      <a href="mailto:rgonzalez@trcimplan.mx">rgonzalez@trcimplan.mx</a></li>
</ul>

<h4>Teléfono</h4>

<ul>
    <li>(871) 500 7078</li>
</ul>
FINAL;
        $this->javascript  = <<<FINAL
FINAL;
    } // constructor

} // Clase Contacto

?>
