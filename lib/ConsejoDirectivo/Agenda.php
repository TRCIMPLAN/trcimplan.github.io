<?php
/*
 * SMIbeta - Consejo Directivo Agenda
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
namespace ConsejoDirectivo;

/**
 * Clase Agenda
 */
class Agenda extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-05-01';
        $this->nombre        = 'Agenda del Consejo Directivo';
        $this->nombre_menu   = 'Agenda';
        $this->directorio    = 'consejo-directivo';
        $this->archivo       = 'agenda';
        $this->descripcion   = 'Agenda del Consejo Directivo del IMPLAN Torreón.';
        $this->claves        = 'IMPLAN, Torreon';
     // $this->imagen_previa = '/imagenes/implan.jpg';
        $this->categorias    = array('Consejo Directivo');
     // $this->encabezado    = '<img class="img-responsive" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<p>Agenda por confirmar.</p>
FINAL;
    } // constructor

} // Clase Agenda

?>
