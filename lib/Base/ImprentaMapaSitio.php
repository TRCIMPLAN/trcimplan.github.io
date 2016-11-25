<?php
/**
 * Plataforma de Conocimiento - Imprenta Mapa Sitio
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
 * Clase ImprentaMapaSitio
 */
class ImprentaMapaSitio extends Imprenta {

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
        echo "ImprentaMapaSitio: ";
        // Iniciar MapaSitio y Recolector
        $mapa_sitio = new MapaSitio();
        $recolector = new Recolector();
        // Agregar la página inicial
        $mapa_sitio->agregar_url('index.html', date('Y-m-d'), 'daily', '1');
        // Recolectar publicaciones
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Validar que haya publicaciones
        if ($recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Aviso en ImprentaMapaSitio: No hay publicaciones para hacer el mapa del sitio.");
        }
        // Bucle para agregar todas las publicaciones
        foreach ($recolector->obtener_publicaciones() as $publicacion) {
            $publicacion->en_raiz = true;
            $mapa_sitio->agregar_url($publicacion->url(), $publicacion->fecha, 'monthly', '1');
        }
        // Crear archivo sitemap.xml
        $this->crear_archivo($mapa_sitio->archivo, $mapa_sitio->xml());
        // Mensaje
        echo " {$mapa_sitio->archivo}\n";
    } // imprimir

} // Clase ImprentaMapaSitio

?>
