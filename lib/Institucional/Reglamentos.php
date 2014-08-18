<?php
/*
 * SMIbeta - Institucional Reglamentos
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
 * Clase Reglamentos
 */
class Reglamentos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Reglamentos';
        $this->directorio  = 'institucional';
        $this->archivo     = 'reglamentos';
        $this->descripcion = 'Pendiente.';
        $this->claves      = 'Pendiente';
        $this->categorias  = array('Institucional');
        $this->encabezado  = '<img class="img-responsive" src="reglamentos/encabezado.jpg">';
        $this->contenido   = <<<FINAL
<p style="text-align: center;"><a href="reglamentos/trcimplan-reglamento.pdf"><img src="reglamentos/icono-descargar.png" alt="Descargar"></a><br>
Descargue el <a title="Reglamento del IMPLAN Torreón" href="reglamentos/trcimplan-reglamento.pdf">Reglamento del IMPLAN Torreón</a>.</p>
FINAL;
        $this->javascript  = <<<FINAL
FINAL;
    } // constructor

} // Clase Reglamentos

?>
