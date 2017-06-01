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
        $this->nombre                    = 'Medios de contacto';
    //  $this->autor                     = '';
        $this->fecha                     = '2014-05-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                   = 'contacto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Datos de contacto como redes sociales, correos electrónicos y teléfonos del IMPLAN Torreón.';
        $this->claves                    = 'IMPLAN, Torreon, Contacto, email, Redes Sociales, Teléfono';
        // Opción del menú Navegación a poner como activa
        $this->nombre_menu               = 'Contacto > Medios de contacto';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array();
        $this->fuentes                   = array();
        $this->regiones                  = array();
        // El contenido es estructurado en un esquema de Organización Gubernamental
        $this->contenido                 = new \Base\SchemaGovernmentOrganization();
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir Dirección
        $direccion                    = new \Base\SchemaPostalAddress();
        $direccion->name              = 'Antiguo Edificio del Banco de México, segundo piso.';
        $direccion->streetAddress     = 'Av. Morelos 1217 Pte. esquina con C. Cepeda. Col. Centro.';
        $direccion->addressLocality   = 'Torreón';
        $direccion->addressRegion     = 'Coahuila';
        $direccion->addressCountry    = 'MX';
        $direccion->postalCode        = '27000';
        // Definir Ubicación
        $ubicacion                    = new \Base\SchemaPlace();
        $ubicacion->geo               = new \Base\SchemaGeoCoordinates();
        $ubicacion->geo->name         = 'Antiguo Edificio del Banco de México';
        $ubicacion->geo->latitude     = 25.5393;
        $ubicacion->geo->longitude    = -103.4622;
        $ubicacion->content           = <<<FINAL
<div style="clear:left;"></div>
<h3>Ubicación</h3>
<iframe width="100%" height="400" frameborder="0" src="http://guivaloz.cartodb.com/viz/1cdb40aa-b3bf-11e4-91ec-0e018d66dc29/embed_map" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>

<h3>Horario</h3>
<ul>
    <li>Lunes a viernes de 8:00 A.M. a 4:00 P.M.</li>
</ul>

FINAL;
        // Definir los datos de la Organización Gubernamental, en el constructor se inició
        $this->contenido->big_heading = TRUE;
        $this->contenido->name        = 'Instituto Municipal de Planeación y Competitividad de Torreón';
        $this->contenido->description = 'Órgano técnico responsable de la planeación municipal del desarrollo del municipio de Torreón, Coahuila, México.';
        $this->contenido->image       = '../imagenes/trcimplan.jpg';
        $this->contenido->image_show  = TRUE;
        $this->contenido->url         = 'http://www.trcimplan.gob.mx';
        $this->contenido->url_label   = 'www.trcimplan.gob.mx';
        $this->contenido->telephone   = '(871) 500 7078';
        $this->contenido->email       = 'info@trcimplan.gob.mx';
        $this->contenido->content     = <<<FINAL
<div style="clear:left;"></div>
<h3>Correos electrónicos</h3>
<ul>
    <li><b>Eduardo Holguín,</b>   Director General:                      <a href="mailto:eholguin@trcimplan.gob.mx">eholguin@trcimplan.gob.mx</a></li>
    <li><b>Luis Campos,</b>       Director de Planeación Urbana:         <a href="mailto:lcampos@trcimplan.gob.mx">lcampos@trcimplan.gob.mx</a></li>
    <li><b>J. Antonio García,</b> Coordinador Administrativo:            <a href="mailto:jgarcia@trcimplan.gob.mx">jgarcia@trcimplan.gob.mx</a></li>
    <li><b>J. Javier Morán,</b>   Coordinador Jurídico:                  <a href="mailto:transparencia@trcimplan.gob.mx">transparencia@trcimplan.gob.mx</a></li>
    <li><b>Guillermo Valdés,</b>  Administrador del Sitio Web:           <a href="mailto:gvaldes@trcimplan.gob.mx">gvaldes@trcimplan.gob.mx</a></li>
</ul>

FINAL;
        // Pasar la dirección y la ubicación a la organización gubernamental
        $this->contenido->address     = $direccion;
        $this->contenido->location    = $ubicacion;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

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
