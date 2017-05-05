<?php
/*
 * TrcIMPLAN Sitio Web - Instrucciones para abrir el Sistema de Información Geográfica
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

namespace SIG;

/**
 * Clase AbrirSIG
 *
 * Ha sido descontinuada del menú de navegación. Se crea el archivo con estatus revisar sólo para recibir visitantes con el URL antiguo.
 */
class AbrirSIG extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Abrir el S.I.G.';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-07-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'abrir-sig';
        // Imágenes
        $this->imagen                     = 'introduccion/imagen.jpg';
        $this->imagen_previa              = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Instrucciones para abrir el Sistema de Información Geográfica.';
        $this->claves                     = 'IMPLAN, Torreon, SIG, Instrucciones';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Información Geográfica > Mapas de Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'ignorar';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Contenido
        $this->contenido = <<<FINAL
<img class="img-responsive" src="abrir-sig/sig-instrucciones-1.png">
<img class="img-responsive" src="abrir-sig/sig-instrucciones-2.jpg">
<img class="img-responsive" src="abrir-sig/sig-instrucciones-3.jpg">
<a href="http://201.159.104.45:8080/apps/implan2.html" target="_blank"><img class="img-responsive" src="abrir-sig/sig-instrucciones-4.jpg"></a>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase AbrirSIG

?>
