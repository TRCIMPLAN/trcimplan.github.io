<?php
/*
 * SMIbeta - Prevención del delito mediante la construcción del espacio público
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
 */

// Namespace
namespace Blog;

/**
 * Clase PrevencionDelitoEspacioPublico
 */
class PrevencionDelitoEspacioPublico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Prevención del delito mediante la construcción del espacio público';
        $this->autor           = 'Arq. Victoria Aranzábal';
        $this->fecha           = '2015-01-28T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'prevencion-delito-espacio-publico';
        $this->imagen          = 'prevencion-delito-espacio-publico/imagen.jpg';
        $this->imagen_previa   = 'prevencion-delito-espacio-publico/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'Ante el miedo y el temor, el lagunero ha tomado medidas en lo individual y lo colectivo en un intento por evitar ser víctimas de algún delito, se ha encerrado en lo privado despreciando el espacio público como si fuera ajeno.';
        $this->claves          = 'IMPLAN, Torreon, Seguridad, Espacio, Publico, Calles';
        $this->categorias      = array('Infraestructura', 'Bienestar');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio      = 'blog';
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
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Carrusel 1
        $carrusel1 = new \Base\Carrusel('carrusel-1');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-fachas-casa.jpg',           '', 'El espacio urbano se caracteriza por nuestras fachas de casa y negocios, estas a su vez pueden incentivar la percepción de inseguridad de quien usa la calle.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-muro.jpg',                  '', 'El muro es el símbolo más visible del miedo.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-control-social.jpg',        '', 'Es importante diseñar espacios que promuevan el control social, una estrategias es a traves de diseños que eviten las barreras visuales.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-no-alenta-uso.jpg',         '', 'Este espacio no alenta el uso de la comunidad que lo rodea.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-miedo.jpg',                 '', 'La ciudad que es construida por el miedo.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-disposicion-parques.jpg',   '', 'La disposición de parques en el espacio no garantiza la apropiación de este por la población.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-diversificacion-suelo.jpg', '', 'La diversificación de usos de suelo, entre otras cosas, tiene la capacidad de promover el uso de los espacios durante más horas al día.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-mallas.jpg',                '', 'La mallas para delimitar el espacio público también es un sinónimos de miedo. Esta estrategia no a demostrado ser valiosa para que el habitante se sienta seguro.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-marcas-negativas.jpg',      '', 'Las marcas negativas dentro del espacio fomentan la percepción de inseguridad.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-dignifiquen.jpg',           '', 'Se requieren espacios públicos que dignificen las comunidades.');
        $carrusel1->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-1-ciudad-limpia.jpg',         '', 'Una ciudad limpia es un factor que apoya a disminuir la percepción de inseguridad. Esto es responsabilidad de todos los que generamos basura.');
        // Carrusel 2
        $carrusel2 = new \Base\Carrusel('carrusel-2');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-construccion-calles.jpg',    '', 'El ciudadano tiene la capacidad de incidir en la construcción de las calles y parques de manera positiva o negativa, también puede construir socialmente su seguridad.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-control-aprecio.jpg',        '', 'El mantenimiento del espacio público habla de que los habitantes tienen control y aprecio sobre de él.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-construccion-seguridad.jpg', '', 'El mantenimiento y limpieza del espacio público es factor importante en la construcción de seguridad.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-apropiacion-sociedad.jpg',   '', 'Es importante la apropiación de la sociedad de los proyectos, promovera su uso y cuidado en el tiempo por parte de la comunidad.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-incluir-comunidad.jpg',      '', 'Incluir a la comunidad permite identifar aquellos espacios en los cuales ellos perciben inseguros.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-calidad-vida.jpg',           '', 'La calidad de vida debe encontrarse fuera de las murallas, en lo común a todos, palpable en el espacio público.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-grupos-vulnerables.jpg',     '', 'La participación de los grupos vulnerables es de vital importancia.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-ver-ser-visto.jpg',          '', 'La posibilidad de ver y ser visto, donde existe cohesición social, desminuye la percepción de inseguridad.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-ninguna-igual-otra.jpg',     '', 'Ninguna comunidad es igual a otra y cada una tiene en conjunto diferentes aspiraciones. Zaragoza Sur, Torreón, 2009 Tesis universitaria.');
        $carrusel2->agregar_diapositiva('prevencion-delito-espacio-publico/carrusel-2-taller-participacion.jpg',   '', 'Taller de participación ciudadana lidereado por iniciativa de planeación en comunidades TOGETHER NORTH JERSEY en Nueva Jersey, EUA.');
        // Juntar las piezas para el cuerpo del artículo
        $this->contenido->articleBody = implode("\n", array(
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte1.md'),
            $carrusel1->html(),
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte2.md'),
            $carrusel2->html(),
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte3.md')));
        // Entregar
        return parent::html();
    } // html

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Juntar las piezas para la redifusión
        $this->redifusion = implode("\n", array(
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte1.md'),
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte2.md'),
            $this->cargar_archivo_markdown_extra('lib/Blog/PrevencionDelitoEspacioPublicoParte3.md')));
        // Entregar
        return parent::redifusion_html();
    } // redifusion_html

} // Clase PrevencionDelitoEspacioPublico

?>
