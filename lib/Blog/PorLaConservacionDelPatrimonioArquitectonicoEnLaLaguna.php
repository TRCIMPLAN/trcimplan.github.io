<?php
/**
 * TrcIMPLAN - Por la conservación del patrimonio arquitectónico en La Laguna
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * @package TrcIMPLAN
 */

namespace Blog;

/**
 * Clase PorLaConservacionDelPatrimonioArquitectonicoEnLaLaguna
 */
class PorLaConservacionDelPatrimonioArquitectonicoEnLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Por la conservación del patrimonio arquitectónico en La Laguna';
        $this->autor           = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha           = '2015-12-21T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'por-la-conservacion-del-patrimonio-arquitectonico-en-la-laguna';
        $this->imagen          = 'por-la-conservacion-del-patrimonio-arquitectonico-en-la-laguna/imagen.jpg';
        $this->imagen_previa   = 'por-la-conservacion-del-patrimonio-arquitectonico-en-la-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Si alguna construcción de Torreón se localiza dentro de las manzanas que conforman el polígono del Centro Histórico, está sujeta a restricciones en cuanto a su mantenimiento, uso o conservación.';
        $this->claves          = 'IMPLAN, Torreon, Edificios, Historicos, Patrimonio, Centro';
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
        $this->contenido_archivo_markdown = 'lib/Blog/PorLaConservacionDelPatrimonioArquitectonicoEnLaLaguna.md';
        // Para el Organizador
        $this->categorias      = array('Cultura', 'Infraestructura');
        $this->fuentes         = array('Ayuntamiento de Torreón', 'Instituto Nacional de Bellas Artes (INBA)');
        $this->regiones        = array('Torreón', 'La Laguna');
    } // constructor

} // Clase PorLaConservacionDelPatrimonioArquitectonicoEnLaLaguna

?>
