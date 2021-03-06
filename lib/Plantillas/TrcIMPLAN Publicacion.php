<?php
/**
 * TrcIMPLAN Sitio Web - CLASE
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
class CLASE extends \Base\Publicacion {ob}

    /**
     * Constructor
     */
    public function __construct() {ob}
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                    = 'Título';
        $this->autor                     = 'Autor'; // Puede ser un arreglo de textos
        $this->fecha                     = '2017-00-00T00:00';
        // El nombre del archivo a crear
        $this->archivo                   = 'archivo'; // En minúsculas, sin espacios, use guiones, letras y números
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Descripción.';
        $this->claves                    = 'IMPLAN, Torreon, ';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Menú > Submenú';
        // Banderas
        $this->aparece_en_pagina_inicial = TRUE;
        $this->poner_imagen_en_contenido = TRUE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array();
        $this->fuentes                   = array();
        $this->regiones                  = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    {cb} // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {ob}
        // Contenido
        $this->contenido = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    {cb} // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {ob}
        // JavaScript
        $this->javascript = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::javascript();
    {cb} // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {ob}
        // Código HTML para redifusión
        $this->redifusion = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    {cb} // redifusion_html

{cb} // Clase CLASE

?>
