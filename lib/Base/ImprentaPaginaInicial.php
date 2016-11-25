<?php
/**
 * Plataforma de Conocimiento - Imprenta Pagina Inicial
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
 * Clase ImprentaPaginaInicial
 */
class ImprentaPaginaInicial extends Imprenta {

    protected $imprentas; // Arreglo con rutas a las clases de ImprentaPublicaciones

    /**
     * Constructor
     *
     * @param array Arreglo con rutas a las clases de ImprentaPublicaciones
     */
    public function __construct($imprentas) {
        $this->imprentas = $imprentas;
    } // constructor

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaPaginaInicial: ";
        // Navegación
        $navegacion          = new Navegacion();
        $navegacion->en_raiz = true;
        // Plantilla, su método html elabora el contenido
        $plantilla             = new \Configuracion\PaginaInicialConfig();
        $plantilla->imprentas  = $this->imprentas;
        $plantilla->navegacion = $navegacion;
        // Imprimir index.html
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
        // Mensaje
        echo " {$plantilla->archivo_ruta}\n";
    } // imprimir

} // Clase ImprentaPaginaInicial

?>
