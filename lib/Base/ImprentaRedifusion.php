<?php
/**
 * Plataforma de Conocimiento - Imprenta Redifusion
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
 * Clase ImprentaRedifusion
 */
class ImprentaRedifusion extends Imprenta {

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
        echo "ImprentaRedifusion: ";
        // Iniciar Redifusion y Recolector
        $redifusion = new Redifusion();
        $recolector = new Recolector();
        // Recolectar publicaciones
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Validar que haya publicaciones
        if ($recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Aviso en ImprentaRedifusion: No hay publicaciones para crear la redifusión.");
        }
        // Bucle para agregar todas las publicaciones
        foreach ($recolector->obtener_publicaciones() as $publicacion) {
            $publicacion->en_raiz = true;
            $redifusion->agregar_elemento($publicacion);
        }
        // Crear archivo rss.xml
        $this->crear_archivo($redifusion->archivo, $redifusion->xml());
        // Mensaje
        echo " {$redifusion->archivo}\n";
    } // imprimir

} // Clase ImprentaRedifusion

?>
