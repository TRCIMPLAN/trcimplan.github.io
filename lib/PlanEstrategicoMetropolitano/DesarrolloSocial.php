<?php
/*
 * SMIbeta - DESCRIPCION
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano Movimiento Libre
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 * @package SMIbeta
 */

// Namespace
namespace PlanEstrategicoMetropolitano;

/**
 * Clase DesarrolloSocial
 */
class DesarrolloSocial extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Desarrollo Social';
        $this->autor         = 'TrcIMPLAN';
        $this->fecha         = '2014-10-01';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'desarrollo-social';
        $this->imagen_previa = 'desarrollo-social/imagen.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="desarrollo-social/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'Descripción.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Blog');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio    = 'plan-estrategico-metropolitano';
        $this->nombre_menu   = 'Desarrollo Social';
        // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
        $this->estado        = 'revisar';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="desarrollo-social/imagen.jpg"></span>

<p>Contenido.</p>

<img class="img-responsive contenido-imagen" src="desarrollo-social/fotografia.jpg" alt="Descripción">
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // DesarrolloSocial

?>
