<?php
/**
 * Sitio Web - CidacProfesionistasTorreon03Metodologia
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
 * Clase CidacProfesionistasTorreon03Metodologia
 */
class CidacProfesionistasTorreon03Metodologia extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Profesionistas Torreón - Metodología';
        $this->autor                      = 'CIDAC';
        $this->fecha                      = '2016-04-25T14:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo                    = 'cidac-profesionistas-torreon-03-metodologia';
        $this->imagen                     = 'cidac-profesionistas-torreon/imagen.png';
        $this->imagen_previa              = 'cidac-profesionistas-torreon/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se realizó una encuesta a los establecimientos de los sectores previamente identificados como prioritarios con base a la generación de empleo y valor agregado.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Investigaciones/CidacProfesionistasTorreon03Metodologia.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Educación', 'Empleo', 'Empresas');
        $this->fuentes                    = array('Centro de Investigación para el Desarrollo, A.C. (CIDAC)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado                     = 'revisar';
    } // constructor

} // Clase CidacProfesionistasTorreon03Metodologia

?>
