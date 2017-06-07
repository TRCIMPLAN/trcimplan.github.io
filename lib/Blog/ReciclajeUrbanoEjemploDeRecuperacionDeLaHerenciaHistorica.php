<?php
/**
 * TrcIMPLAN Sitio Web - Reciclaje Urbano: ejemplo de recuperación de la herencia histórica
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
 * Clase ReciclajeUrbanoEjemploDeRecuperacionDeLaHerenciaHistorica
 */
class ReciclajeUrbanoEjemploDeRecuperacionDeLaHerenciaHistorica extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reciclaje Urbano: ejemplo de recuperación de la herencia histórica';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2016-06-15T10:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'reciclaje-urbano-ejemplo-de-recuperacion-de-la-herencia-historica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El concepto de reciclaje urbano no es nuevo en la región y se ha aplicado con éxito, pero hace falta detonarlo aún más. Algunos ejemplos en Torreón son: el Complejo Cultural y Deportivo La Jabonera, la Línea Verde, el Centro Pilar Rioja, entre otros.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ReciclajeUrbanoEjemploDeRecuperacionDeLaHerenciaHistorica.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Cultura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'La Laguna');
    } // constructor

} // Clase ReciclajeUrbanoEjemploDeRecuperacionDeLaHerenciaHistorica

?>
