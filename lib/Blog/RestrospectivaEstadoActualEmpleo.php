<?php
/*
 * SMIbeta - Retrospectiva y estado actual del empleo en Torreón y la Zona Metropolitana de La Laguna
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
namespace Blog;

/**
 * Clase RestrospectivaEstadoActualEmpleo
 */
class RestrospectivaEstadoActualEmpleo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Retrospectiva y estado actual del empleo en Torreón y la Zona Metropolitana de La Laguna';
        $this->autor         = 'Lic. Rodrigo González Morales';
        $this->fecha         = '2014-09-26';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'retrospectiva-estado-actual-empleo';
        $this->imagen_previa = 'retrospectiva-estado-actual-empleo/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="retrospectiva-estado-actual-empleo/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'El empleo es uno de los principales indicadores, que muestra el desempeño económico de una ciudad, región o país. Si bien hay una serie de variables asociadas como lo son salarios promedio, los sectores de ocupación y tipos de empleo, la tasa de desempleo es el indicador de mayor comparabilidad temporal que puede medir de forma general la situación económica y laboral en un entorno determinado.';
        $this->claves        = 'IMPLAN, Torreon, Empleo';
        $this->categorias    = array('Blog', 'Empleo');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio    = 'blog';
        $this->nombre_menu   = 'Análisis Publicados';
        // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
        $this->estado        = 'ignorar';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="retrospectiva-estado-actual-empleo/imagen.jpg"></span>

<p>Pendiente.</p>

<img class="img-responsive contenido-imagen" src="retrospectiva-estado-actual-empleo/fotografia.jpg" alt="Fotografia">

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase RestrospectivaEstadoActualEmpleo

?>
