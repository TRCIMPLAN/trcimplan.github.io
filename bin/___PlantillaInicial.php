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
namespace SMI;

/**
 * Clase PlantillaInicial
 */
class PlantillaInicial extends \Base\Plantilla {

    /**
     * Constructor
     */
    public function __construct() {
        $this->titulo        = 'Sistema Metropolitano de Indicadores';
        $this->autor         = 'TrcIMPLAN';
        $this->descripcion   = 'IMPLAN Torreón, Sistema Metropolitano de Indicadores.';
        $this->claves        = 'IMPLAN, Torreon, Indicadores';
        $this->directorio    = 'smi';
        $this->ruta          = "{$this->directorio}/index.html";
        $this->imagen_previa = '/imagenes/implan.jpg';
        $this->encabezado    = '<img class="img-responsive" src="smi/encabezado.jpg">';
        $this->contenido     = <<<FINAL
FINAL;
        $this->javascript    = '';
    } // constructor

} // Clase PlantillaInicial

?>
