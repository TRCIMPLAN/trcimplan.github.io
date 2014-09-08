<?php
/*
 * SMIbeta - SIG Alumbrado Público
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
namespace SIG;

/**
 * Clase AlumbradoPublico
 */
class AlumbradoPublico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-09-08';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Alumbrado Público';
        $this->nombre_menu   = 'Alumbrado Público';
        $this->directorio    = 'sig';
        $this->archivo       = 'alumbrado-publico';
        $this->descripcion   = 'Mapa del Avance de Reconversión del Alumbrado Público de Torreón.';
        $this->claves        = 'IMPLAN, Torreon, Alumbrado, Reconversión, SIG, GIS';
     // $this->imagen_previa = 'directorio/imagen-previa.jpg';
        $this->categorias    = array('SIG', 'Alumbrado Público');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<iframe width='100%' height='520' frameborder='0' src='https://sigimplan.cartodb.com/viz/e1447ce2-35fa-11e4-a9bb-0e230854a1cb/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase AlumbradoPublico

?>
