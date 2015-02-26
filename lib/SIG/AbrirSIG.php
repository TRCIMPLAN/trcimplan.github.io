<?php
/*
 * TrcIMPLAN Sitio Web - Instrucciones para abrir el Sistema de Información Geográfica
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
 * Clase AbrirSIG
 */
class AbrirSIG extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-07-01';
        $this->nombre        = 'Abrir el Sistema de Información Geográfica';
        $this->nombre_menu   = 'Información Geográfica > Abrir el SIG';
        $this->directorio    = 'sig';
        $this->archivo       = 'abrir-sig';
        $this->descripcion   = 'Instrucciones para abrir el Sistema de Información Geográfica.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('SIG');
        $this->contenido     = <<<FINAL
<img class="img-responsive" src="abrir-sig/sig-instrucciones-1.png">
<img class="img-responsive" src="abrir-sig/sig-instrucciones-2.jpg">
<img class="img-responsive" src="abrir-sig/sig-instrucciones-3.jpg">
<a href="http://201.159.104.45:8080/apps/implan2.html" target="_blank"><img class="img-responsive" src="abrir-sig/sig-instrucciones-4.jpg"></a>
FINAL;
    } // constructor

} // Clase AbrirSIG

?>
