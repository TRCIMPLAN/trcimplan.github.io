<?php
/**
 * TrcIMPLAN - DESCRIPCION
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
 * Clase SIGMapasTorreon
 *
 * No crea archivo. Es para poner la opción en index.html
 */
class SIGMapasTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'S.I.G. de Torreón';
    //~ $this->autor                      = '';
        $this->fecha                      = '2015-05-14T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = ''; // No hay archivo HTML a crear
        // Imágenes
        $this->imagen                     = 'introduccion/imagen.jpg';
        $this->imagen_previa              = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Mapas del Sistema de Información Geográfica para Torreón.';
        $this->claves                     = 'IMPLAN, SIG, Información, Geográfica, Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'publicar';
        // URL de destino
        $this->url                        = '../sig-mapas-torreon/index.html';
    } // constructor

} // Clase SIGMapasTorreon

?>
