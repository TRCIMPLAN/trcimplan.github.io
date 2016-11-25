<?php
/**
 * Plataforma de Conocimiento - Creador
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase ImprentaPaginaBuscadorResultados
 */
class ImprentaPaginaBuscadorResultados extends Imprenta {

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaPaginaBuscadorResultados: ";
        // Navegación
        $navegacion          = new Navegacion();
        $navegacion->en_raiz = true;
        // Plantilla, su método html elabora el contenido
        $plantilla             = new \Configuracion\PaginaBuscadorResultadosConfig();
        $plantilla->navegacion = $navegacion;
        // Imprimir buscador-resultados.html
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
        // Mensaje
        echo " {$plantilla->archivo_ruta}\n";
    } // Imprimir

} // Clase ImprentaPaginaBuscadorResultados

?>
