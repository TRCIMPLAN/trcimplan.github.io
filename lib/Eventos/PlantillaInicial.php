<?php
/*
 * SMIbeta - Eventos Plantilla Eventos
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
namespace Eventos;

/**
 * Clase PlantillaInicial
 */
class PlantillaInicial extends \Base\PlantillaCompleta {

    public $publicaciones = array(); // Arreglo con instancias de Publicacion generado por Imprenta

    /**
     * Constructor
     */
    public function __construct() {
        $this->titulo        = 'Eventos';
        $this->autor         = 'TrcIMPLAN';
        $this->descripcion   = 'IMPLAN Torreón, Eventos.';
        $this->claves        = 'IMPLAN, Torreon, Eventos';
        $this->directorio    = 'eventos';
        $this->ruta          = "{$this->directorio}/index.html";
        $this->imagen_previa = '/imagenes/implan.jpg';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_array($this->publicaciones)) {
            throw new \Exception("Error en \Eventos\PlantillaInicial: La propiedad publicaciones es incorrecta.");
        }
        if (count($this->publicaciones) == 0) {
            throw new \Exception("Error en \Eventos\PlantillaInicial: El arreglo publicaciones no tiene datos.");
        }
        // Acumularemos el contenido en este arreglo
        $a = array();
        // Bucle con las Publicaciones
        foreach ($this->publicaciones as $publicacion) {
            $breve = new \Base\Breve($publicacion);
            $a[]   = $breve->html();
        }
        // Definir contenido
        $this->contenido = implode("\n", $a);
        // Ejecutar padre
        return parent::html();
    } // html

} // Clase PlantillaInicial

?>
