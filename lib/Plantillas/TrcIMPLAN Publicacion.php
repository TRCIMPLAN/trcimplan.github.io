<?php
/**
 * TrcIMPLAN Sitio Web - CLASE
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * @package TrcIMPLANSitioWeb
 */

namespace DIRECTORIO;

/**
 * Clase CLASE
 */
class CLASE extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Título';
        $this->autor                     = ''; // Puede ser un arreglo de textos
        $this->fecha                     = '2016-00-00T00:00';
        // El nombre del archivo a crear
        $this->archivo                   = '';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Descripción.';
        $this->claves                    = 'Clave1, Clave2, Clave3';
        // Banderas
        $this->poner_imagen_en_contenido = TRUE; // Poner la imagen en la parte superior izquierda
        $this->para_compartir            = TRUE; // Poner los botones para compartir en redes sociales
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array();
        $this->fuentes                   = array();
        $this->regiones                  = array();
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Contenido
        $this->contenido = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript
        $this->javascript = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase CLASE

?>
