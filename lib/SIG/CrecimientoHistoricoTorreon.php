<?php
/*
 * TrcIMPLAN Sitio Web - Mapa del Crecimiento Histórico de Torreón
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
namespace SIG;

/**
 * Clase CrecimientoHistoricoTorreon
 */
class CrecimientoHistoricoTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Crecimiento Histórico de Torreón';
     // $this->autor            = 'Autor';
        $this->fecha            = '2015-02-03';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'crecimiento-historico-torreon';
     // $this->imagen_previa    = 'crecimiento-historico-torreon/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="crecimiento-historico-torreon/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Mapa del Crecimiento Histórico de Torreón.';
        $this->claves           = 'IMPLAN, Torreon, Crecimiento, Historico';
        $this->categorias       = array('SIG');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'sig';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Información Geográfica > Crecimiento Histórico';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
     // $this->para_compartir   = true;
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL
<iframe width='100%' height='520' frameborder='0' src='https://implantorreon.cartodb.com/u/sigimplan/viz/180ab8da-643c-11e4-971a-0e018d66dc29/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>

<a class="btn btn-default" href="https://implantorreon.cartodb.com/u/sigimplan/viz/180ab8da-643c-11e4-971a-0e018d66dc29/embed_map" target="_blank" role="button">Ver a pantalla completa</a>

FINAL;
     // $this->javascript       = '';
    } // constructor

} // Clase CrecimientoHistoricoTorreon

?>
