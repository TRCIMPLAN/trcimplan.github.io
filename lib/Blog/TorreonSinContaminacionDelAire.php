<?php
/**
 * TrcIMPLAN Sitio Web - TorreonSinContaminacionDelAire
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

namespace Blog;

/**
 * Clase TorreonSinContaminacionDelAire
 */
class TorreonSinContaminacionDelAire extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '#SinContaminaciónDelAire';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2019-05-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-sin-contaminacion-del-aire-mayo2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El próximo 5 de junio se llevará a cabo en China la celebración oficial de ONU por el Día Mundial del Medio Ambiente, el tema elegido para la celebración de este año es la contaminación del aire. Hoy en día la calidad del aire es uno de los temas más sustanciales a nivel mundial ya que se estima que el 90% de la población humana respira aire contaminado en el mundo.';
        $this->claves                     = 'IMPLAN, Torreon, contaminacion aire, calidad aire,contaminación atmosférica, Día Mundial del Medio Ambiente, salud';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonSinContaminacionDelAire.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Bienestar');
        $this->fuentes                    = array('SEMA','ONU Medio Ambiente','OMS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TorreonSinContaminacionDelAire

?>
