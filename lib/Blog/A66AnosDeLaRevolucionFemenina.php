<?php
/**
 * TrcIMPLAN Sitio Web - A66AnosDeLaRevolucionFemenina
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
 * Clase A66AnosDeLaRevolucionFemenina
 */
class A66AnosDeLaRevolucionFemenina extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '66 años de la Revolución Femenina';
        $this->autor                      = 'Lic. María Teresa Sánchez Domínguez';
        $this->fecha                      = '2021-08-03T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '66-anos-de-la-revolucion-femenina-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Hablar de la primera vez que la mujer emitió su voto, es un tema que nos debe de llenar de orgullo a toda la ciudadanía, es cierto que fuimos de los últimos países en Latinoamérica en obtener este derecho, pero también es importante destacar que el 03 de julio de 1955, fue un parteaguas en la participación de la mujer, tomando un lugar muy importante en la sociedad, como lo cita la ley suprema en México: Constitución Política de los Estados Unidos Mexicanos';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/A66AnosDeLaRevolucionFemenina.md';
        // Para el Organizador
        $this->categorias                 = array('Género', 'Población');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase A66AnosDeLaRevolucionFemenina

?>
