<?php
/**
 * Sitio Web - Nueva Gobernanza: Construyendo normas con los habitantes de la ciudad
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

namespace SalaPrensa;

/**
 * Clase NuevaGobernanzaConstruyendoNormasConLosHabitantesDeLaCiudad
 */
class NuevaGobernanzaConstruyendoNormasConLosHabitantesDeLaCiudad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Nueva Gobernanza: Construyendo normas con los habitantes de la ciudad';
    //  $this->autor                      = '';
        $this->fecha                      = '2016-07-22T13:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-07-21-nueva-gobernanza-construyendo-normas-con-los-habitantes-de-la-ciudad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Video de la segunda edición del #SeminariOnline de OpeningCities donde las ciudades de Torreón y Aguascalientes compartieron su experiencia de inclusión de la ciudadanía en un proceso completo de construcción de normatividad.';
        $this->claves                     = 'IMPLAN, Torreon, Nueva, Gobernanza, Gobierno, Abierto';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/NuevaGobernanzaConstruyendoNormasConLosHabitantesDeLaCiudad.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase NuevaGobernanzaConstruyendoNormasConLosHabitantesDeLaCiudad

?>
