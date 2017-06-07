<?php
/**
 * Sitio Web - CidacProfesionistasTorreon
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace Investigaciones;

/**
 * Clase CidacProfesionistasTorreon
 */
class CidacProfesionistasTorreon extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Profesionistas Torreón';
        $this->autor                      = 'CIDAC';
        $this->fecha                      = '2016-04-25T14:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo                    = 'cidac-profesionistas-torreon';
        $this->imagen                     = 'cidac-profesionistas-torreon/imagen.png';
        $this->imagen_previa              = 'cidac-profesionistas-torreon/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Profesionistas Torreón nos adentramos al ámbito local para analizar y contestar la pregunta: ¿existe o no una brecha de talento y competencias en Torreón?.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Investigaciones/CidacProfesionistasTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Educación', 'Empleo', 'Empresas');
        $this->fuentes                    = array('Centro de Investigación para el Desarrollo, A.C. (CIDAC)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CidacProfesionistasTorreon

?>
