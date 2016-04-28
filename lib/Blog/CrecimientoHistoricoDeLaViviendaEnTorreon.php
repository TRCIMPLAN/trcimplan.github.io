<?php
/**
 * Sitio Web - CrecimientoHistoricoDeLaViviendaEnTorreon
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

namespace Blog;

/**
 * Clase CrecimientoHistoricoDeLaViviendaEnTorreon
 */
class CrecimientoHistoricoDeLaViviendaEnTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Crecimiento histórico de la vivienda en Torreón';
        $this->autor           = 'Arq. Ilse Ávila García';
        $this->fecha           = '2016-04-28T14:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'crecimiento-historico-de-la-vivienda-en-torreon';
        $this->imagen          = 'crecimiento-historico-de-la-vivienda-en-torreon/imagen.jpg';
        $this->imagen_previa   = 'crecimiento-historico-de-la-vivienda-en-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El crecimiento disperso de la vivienda ha permitido que surjan conjuntos habitacionales alejados de los centros urbanos donde se encuentran los puntos de trabajo, educación y recreación.  Carecen de equipamientos de espacios públicos, servicios de abasto, de educación, de salud y recreación.';
        $this->claves          = 'IMPLAN, Torreon, Crecimiento, Vivienda, Habitacional';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CrecimientoHistoricoDeLaViviendaEnTorreon.md';
        // Para el Organizador
        $this->categorias      = array('Bienestar', 'Movilidad', 'Vialidad', 'Vivienda');
        $this->fuentes         = array('IMPLAN');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CrecimientoHistoricoDeLaViviendaEnTorreon

?>
