<?php
/*
 * SMIbeta - Invertir en Torreón
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 * Clase InvertirEnTorreon
 */
class InvertirEnTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Invertir en Torreón';
        $this->autor            = 'Lic. Heriberto Ramos Hernández';
        $this->fecha            = '2014-05-13T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'invertir-en-torreon';
        $this->imagen           = 'invertir-en-torreon/imagen.jpg';
        $this->imagen_previa    = 'invertir-en-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = '¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Empresas', 'Empleo', 'Infraestructura', 'Competitividad');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón. O no...</p>

<ol>
  <li>Buscadores de Mercados. Son empresas que producen o son dueñas de algún activo o producto que tiene una demanda real o potencial en la región que eligen para invertir. Invierten y construyen instalaciones locales para estar cerca de sus consumidores base.</li>
  <li>Buscadores de Certidumbre Política y Económica. Adquieren o establecen nuevas empresas en ciudades y regiones donde el desempeño de las autoridades gubernamentales es propositivo con la iniciativa privada. Donde no hay “bandazos” ideológicos, impositivos, o de seguridad. Donde existen políticas públicas claras y eficaces.</li>
  <li>Buscadores de Infraestructura. Optan por las ciudades y regiones que cuenten con los mejores servicios públicos y la infraestructura necesaria para hacer negocios. Carreteras, aeropuertos, redes inalámbricas de acceso público a Internet, banda ancha. Drenaje, señalización, telefonía, áreas comerciales y recreativas. Universidades, oficinas, suministro confiable de energía, recintos fiscales, bodegas, reservas territoriales, y parques industriales, logísticos, y tecnológicos.</li>
  <li>Buscadores de Materias Primas. Se ubican en las regiones donde se encuentran las materias primas necesarias para su proceso, producto, o negocio. Mineras, petroleras, agrícolas, forestales, y hasta hoteleras, (el paisaje y la playa son la materia prima de algunos hoteles)</li>
  <li>Buscadores de Bajo Costo de Manufactura. Buscan países y regiones donde el costo relativo de mano de obra sea menor.</li>
  <li>Buscadores de Conocimientos. Buscan regiones y ciudades donde exista el conocimiento, la tecnología, la educación, y la pericia del capital humano que les es indispensable. Las firmas de inversión en Nueva York, y ahora de Monterrey. Las firmas de tecnologías de información en California, India, y ahora en Guadalajara. La industria aeroespacial en Querétaro.</li>
  <li>Seguidores del Cliente. Aquellas empresas proveedoras de componentes, productos y servicios para una empresa muy grande. Que la seguirán a donde vaya.</li>
</ol>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase InvertirEnTorreon

?>
