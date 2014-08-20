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
 * Clase IndicadoresTorreon
 */
class IndicadoresTorreon extends \Base\Publicacion {

    public $publicaciones = array(); // Arreglo con instancias de Publicacion generado por Imprenta

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-08-19';
        $this->nombre        = 'Indicadores Torreón';
        $this->nombre_menu   = 'Indicadores Torreón';
        $this->directorio    = 'indicadores-torreon';
        $this->archivo       = 'index';
        $this->descripcion   = 'IMPLAN Torreón, Sistema Metropolitano de Indicadores. Indicadores de Torreón.';
        $this->claves        = 'IMPLAN, Torreon, Indicadores';
     // $this->imagen_previa = '/imagenes/implan.jpg';
        $this->categorias    = array('Indicadores', 'Torreón');
     // $this->encabezado    = '<img class="img-responsive" src="vision-mision/encabezado.jpg">';
     // $this->contenido     = '';
     // $this->javascript    = '';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_array($this->publicaciones)) {
            throw new \Exception("Error en IndicadoresTorreon: La propiedad publicaciones es incorrecta.");
        }
        if (count($this->publicaciones) == 0) {
            throw new \Exception("Error en IndicadoresTorreon: El arreglo publicaciones no tiene datos.");
        }
        // Acumularemos el contenido en este arreglo
        $a = array();
        // Bucle con las Publicaciones
        foreach ($this->publicaciones as $publicacion) {
            $a[] = $publicacion->corto_html();
        }
        // Definir contenido
        $this->contenido = implode("\n", $a)."\n<!-- IndicadoresTorreon:html() -->\n";
        // Ejecutar padre
        return parent::html();
    } // html

} // Clase IndicadoresTorreon

?>
