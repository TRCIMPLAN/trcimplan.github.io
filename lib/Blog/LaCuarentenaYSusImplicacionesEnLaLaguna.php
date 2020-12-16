<?php
/**
 * TrcIMPLAN Sitio Web - LaCuarentenaYSusImplicacionesEnLaLaguna
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
 * Clase LaCuarentenaYSusImplicacionesEnLaLaguna
 */
class LaCuarentenaYSusImplicacionesEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La cuarentena y sus implicaciones en La Laguna.';
        $this->autor                      = 'Dr. Iván de Luna Aldape';
        $this->fecha                      = '2020-05-18T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-cuarentena-y-sus-implicaciones-en-la-laguna-mayo-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“En una epidemia no hay culpables, todos son víctimas.” – José Saramago, Ensayo sobre la ceguera.';
        $this->claves                     = 'IMPLAN, Torreon, covid, epidemia, cuarentena';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaCuarentenaYSusImplicacionesEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Salud','Población');
        $this->fuentes                    = array('Inegi','Implan');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaCuarentenaYSusImplicacionesEnLaLaguna

?>
