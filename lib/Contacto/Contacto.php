<?php
/*
 * TrcIMPLAN Sitio Web - Contacto
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
namespace Contacto;

/**
 * Clase Contacto
 */
class Contacto extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Medios de contacto';
     // $this->autor            = '';
        $this->fecha            = '2014-05-01T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'contacto';
     // $this->imagen           = 'contacto/imagen.jpg';
     // $this->imagen_previa    = 'contacto/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Datos de contacto como redes sociales, correos electrónicos y teléfonos del IMPLAN Torreón.';
        $this->claves           = 'IMPLAN, Torreon, Contacto, email, Redes Sociales, Teléfono';
        $this->categorias       = array('Contacto');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'contacto';
        $this->nombre_menu      = 'Contacto > Medios de contacto';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = false;
        // El contenido es estructurado en un esquema
        $trcimplan              = new \Base\SchemaGovernmentOrganization();
        $trcimplan->big_heading = false;
        $trcimplan->name        = 'Instituto Municipal de Planeación y Competitividad de Torreón';
        $trcimplan->description = 'Órgano técnico responsable de la planeación municipal del desarrollo del municipio de Torreón, Coahuila, México.';
        $trcimplan->image       = '../imagenes/trcimplan.jpg';
        $trcimplan->image_show  = true;
        $trcimplan->url         = 'http://www.trcimplan.gob.mx';
        $trcimplan->url_label   = 'www.trcimplan.gob.mx';
        $trcimplan->telephone   = '(871) 500 7078';
        $trcimplan->email       = 'info@trcimplan.mx';
        $trcimplan->extra       = <<<FINAL
<div style="clear:left;"></div>
<h3>Correos electrónicos</h3>
<ul>
    <li>Eduardo Holguín, Director General: <a href="mailto:eholguin@trcimplan.mx">eholguin@trcimplan.mx</a></li>
    <li>Ilse Ávila, Director de Proyectos: <a href="mailto:iavila@trcimplan.mx">iavila@trcimplan.mx</a></li>
    <li>Luis Campos, Director de Planeación Urbana: <a href="mailto:lcampos@trcimplan.mx">lcampos@trcimplan.mx</a></li>
    <li>Mariana Segovia, Director Administrativo: <a href="mailto:msegovia@trcimplan.mx">msegovia@trcimplan.mx</a></li>
    <li>Rodrigo González, Director de Investigación Estratégica: <a href="mailto:rgonzalez@trcimplan.mx">rgonzalez@trcimplan.mx</a></li>
    <li>Guillermo Valdés, Administrador del Sitio Web: <a href="mailto:webmaster@trcimplan.mx">webmaster@trcimplan.mx</a></li>
</ul>

FINAL;
        // La dirección
        $trcimplan->address                  = new \Base\SchemaPostalAddress();
        $trcimplan->address->name            = 'Antiguo Edificio del Banco de México, segundo piso.';
        $trcimplan->address->streetAddress   = 'Av. Morelos 1217 Pte. esquina con C. Cepeda. Col. Centro.';
        $trcimplan->address->addressLocality = 'Torreón';
        $trcimplan->address->addressRegion   = 'Coahuila';
        $trcimplan->address->addressCountry  = 'MX';
        $trcimplan->address->postalCode      = '27000';
        // La ubicación geográfica
        $trcimplan->location                 = new \Base\SchemaPlace();
     // $trcimplan->location->name           = 'Location: Antiguo Edificio del Banco de México, segundo piso.';
        $trcimplan->location->geo            = new \Base\SchemaGeoCoordinates();
        $trcimplan->location->geo->name      = 'Antiguo Edificio del Banco de México';
        $trcimplan->location->geo->latitude  = 25.5393;
        $trcimplan->location->geo->longitude = -103.4622;
        $trcimplan->location->extra          = <<<FINAL
<div style="clear:left;"></div>
<h3>Ubicación</h3>
<iframe width="100%" height="400" frameborder="0" src="http://guivaloz.cartodb.com/viz/1cdb40aa-b3bf-11e4-91ec-0e018d66dc29/embed_map" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>

<h3>Horario</h3>
<ul>
    <li>Lunes a viernes de 8:00 A.M. a 4:00 P.M.</li>
</ul>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido = $trcimplan;
    } // constructor

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Para redifusión sólo en vínculo a esta página
        $this->redifusion = sprintf('<a href="%s">%s</a>', "{$this->directorio}/{$this->archivo}.html", $this->descripcion);
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase Contacto

?>
