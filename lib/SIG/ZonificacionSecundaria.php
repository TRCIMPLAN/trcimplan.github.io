<?php
/*
 * TrcIMPLAN Sitio Web - Zonificacion Secundaria
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
 * Clase ZonificacionSecundaria
 *
 * No crea archivo. Es para poner la opción en index.html
 */
class ZonificacionSecundaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Zonificación Secundaria';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-11-18T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = ''; // No hay archivo HTML a crear
        // Imágenes
        $this->imagen                     = '../sig-mapas-torreon/zonificacion-secundaria/imagen.jpg';
        $this->imagen_previa              = '../sig-mapas-torreon/zonificacion-secundaria/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Mapa referente para consultar los usos de suelo del área urbana de Torreón. De clic en un área para mostrar detalles y el enlace al reglamento.';
        $this->claves                     = 'IMPLAN, Torreón, Zonificación, Usos de Suelo';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'publicar';
        // URL de destino
        $this->url                        = '../sig-mapas-torreon/zonificacion-secundaria.html';
    } // constructor

} // Clase ZonificacionSecundaria

?>
