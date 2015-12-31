<?php
/**
 * TrcIMPLAN - Jóvenes: los más afectados por el desempleo en La Laguna
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
 * Clase JovenesLosMasAfectadosPorElDesempleoEnLaLaguna
 */
class JovenesLosMasAfectadosPorElDesempleoEnLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Jóvenes: los más afectados por el desempleo en La Laguna';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2015-12-28T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'jovenes-los-mas-afectados-por-el-desempleo-en-la-laguna';
        $this->imagen          = 'jovenes-los-mas-afectados-por-el-desempleo-en-la-laguna/imagen.jpg';
        $this->imagen_previa   = 'jovenes-los-mas-afectados-por-el-desempleo-en-la-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El salario promedio para un lagunero de 50 años con un empleo de jornada completa es de más de 6 mil pesos, un joven de 20 años gana aproximadamente 4 mil pesos mensuales.';
        $this->claves          = 'IMPLAN, Torreon, Jovenes, Empleo, Salario, Eduacion, Emprendedores';
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
        $this->contenido_archivo_markdown = 'lib/Blog/JovenesLosMasAfectadosPorElDesempleoEnLaLaguna.md';
        // Para el Organizador
        $this->categorias      = array('Empleo', 'Población');
        $this->fuentes         = array('INEGI', 'Elaboración propia con datos obtenidos del INEGI', 'Organización Internacional del Trabajo (OIT)');
        $this->regiones        = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase JovenesLosMasAfectadosPorElDesempleoEnLaLaguna

?>
