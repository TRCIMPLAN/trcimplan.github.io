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
        $this->nombre        = 'Medios de contacto';
        $this->nombre_menu   = 'Medios de contacto';
        $this->directorio    = 'contacto';
        $this->archivo       = 'contacto';
        $this->descripcion   = 'Redes sociales, correos electrónicos y teléfonos del IMPLAN Torreón.';
        $this->claves        = 'IMPLAN, Torreon, Contacto, email, Redes Sociales, Teléfono';
     // $this->imagen_previa = 'directorio/imagen-previa.jpg';
        $this->categorias    = array('Contacto');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="vision-mision/encabezado.jpg">';
        $markdown = <<<FINAL
#### Correos electrónicos

* Eduardo Holguín, Director General: [eholguin@trcimplan.mx](mailto:eholguin@trcimplan.mx)
* Luis Campos, Director de Planeacíon Urbana: [lcampos@trcimplan.mx](mailto:lcampos@trcimplan.mx)
* Rodrigo González, Director de Investigación Estratégica: [rgonzalez@trcimplan.mx](mailto:rgonzalez@trcimplan.mx)
* Información general: [info@trcimplan.mx](mailto:info@trcimplan.mx)

#### Teléfono

* (871) 500 7078

#### Redes Sociales

* Twitter [@trcimplan](https://www.twitter.com/trcimplan)
* Facebook [/trcimplan](https://facebook.com/trcimplan)

FINAL;
        $this->contenido     = \Michelf\Markdown::defaultTransform($markdown);
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Contacto

?>
