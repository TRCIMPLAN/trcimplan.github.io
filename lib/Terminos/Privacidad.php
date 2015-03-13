<?php
/*
 * TrcIMPLAN Sitio Web - Aviso de Privacidad
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
namespace Terminos;

/**
 * Clase Privacidad
 */
class Privacidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Aviso de Privacidad';
     // $this->autor            = '';
        $this->fecha            = '2015-03-12T09:30';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'privacidad';
        $this->imagen_previa    = '';
        $this->encabezado_color = '#C23700';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = '';
        $this->claves           = 'IMPLAN, Torreon, Aviso, Privacidad';
        $this->categorias       = array('Términos');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'terminos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Términos de Uso > Aviso de Privacidad';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = false;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        $schema->articleBody    = <<<FINAL

<h3>PARA LOS TRÁMITES, SERVICIOS, PROGRAMAS O PROYECTOS</h3>

<b>INSTITUTO MUNICIPAL DE PLANEACIÓN Y COMPETITIVIDAD DE TORREÓN, COAHUILA,</b> ubicada en Edificio Antiguo Banco de México Numero 1217 Pte. Colonia Centro Torreón, Coahuila, es la responsable del uso y protección de sus datos personales, y al respecto le informamos lo siguiente: Los datos personales que recabamos de usted, los utilizaremos para atender y proveer el trámite, servicio, programa o proyecto que nos solicita; dar a conocer con mayor información sobre los términos y condiciones en que serán tratados sus datos personales, así como informar el traspaso de sus datos a terceros con quienes compartimos su información personal; además de la forma en que el Titular puede ejercer sus Derechos ARCO. El formato integro, puede consultarlo a través del sitio de Transparencia en la sección de Datos Personales en el enlace <a href="http://www.torreon.gob.mx./transparencia/privacidad.cfm" target="_blank">http://www.torreon.gob.mx./transparencia/privacidad.cfm</a>

FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase Privacidad

?>
