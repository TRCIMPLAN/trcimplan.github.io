<?php
/*
 * TrcIMPLAN Sitio Web - Institucional Información Financiera
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
namespace Institucional;

/**
 * Clase InformacionFinanciera
 */
class InformacionFinanciera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Información Financiera';
     // $this->autor            = '';
        $this->fecha            = '2014-08-01T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'informacion-financiera';
     // $this->imagen           = '../imagenes/imagen.jpg';
     // $this->imagen_previa    = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = '';
        $this->claves           = 'IMPLAN, Torreon, Financiera';
        $this->categorias       = array('Institucional');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'institucional';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Institucional > Información Financiera';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = false;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen_previa;
        $schema->image_show     = false;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        $schema->articleBody    = <<<FINAL

<p>Respecto al avance de Gestión Financiera del primer y segundo trimestre del presente año,
actualmente el <b>Instituto Municipal de Planeación y Competitividad de Torreón</b> se encuentra
en proceso de descentralización de la <b>Administración Municipal de Torreón</b>,
de tal forma que aún no genera información financiera propia.</p>

FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
    } // constructor

} // Clase InformacionFinanciera

?>
