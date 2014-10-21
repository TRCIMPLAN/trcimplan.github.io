<?php
/*
 * SMIbeta - Institucional Información Financiera
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
 * Clase InformacionFinanciera
 */
class InformacionFinanciera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha            = '2014-08-01';
     // $this->autor            = 'TrcIMPLAN';
        $this->nombre           = 'Información Financiera';
        $this->nombre_menu      = 'Información Financiera';
        $this->directorio       = 'institucional';
        $this->archivo          = 'informacion-financiera';
        $this->descripcion      = 'Respecto al avance de Gestión Financiera del IMPLAN Torreón.';
        $this->claves           = 'IMPLAN, Torreon';
     // $this->imagen_previa    = '/imagenes/implan.jpg';
        $this->categorias       = array('Institucional');
     // $this->encabezado       = '<img class="img-responsive" src="informacion-financiera/encabezado.jpg">';
        $this->encabezado_color = '#007080';
        $this->contenido        = <<<FINAL
<p>Respecto al avance de Gestión Financiera del primer y segundo trimestre del presente año, actualmente el Instituto Municipal de Planeación y Competitividad de Torreón se encuentra en proceso de descentralización de la Administración Municipal de Torreón, de tal forma que aún no genera información financiera propia.</p>
FINAL;
    } // constructor

} // Clase InformacionFinanciera

?>
