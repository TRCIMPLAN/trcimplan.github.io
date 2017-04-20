<?php
/**
 * TrcIMPLAN Sitio Web - Publicacion Config
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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

namespace Configuracion;

/**
 * Clase PublicacionConfig
 */
class PublicacionConfig {

    public $sitio_url                 = 'http://www.trcimplan.gob.mx'; // Sin diagonal al final
    public $fecha                     = '1980-01-01T08:00';            // La fecha en forma de YYYY-MM-DDTHH:MM, siendo así se ordena cronológicamente
    public $autor                     = 'TrcIMPLAN Staff';             // El nombre o apodo a quien se le atribuye
    public $aparece_en_pagina_inicial = TRUE;                          // Verdadero si va aparecer en la página de inicio
    public $para_compartir            = TRUE;                          // Si es verdadero pondrá los botones para compartir en Twitter/Facebook
    public $imagen;                                                    // Ruta relativa a un archivo de imagen, anteriormente a '../imagenes/imagen.jpg'
    public $imagen_previa;                                             // Ruta relativa a un archivo de imagen para la vista previa, anteriormente a '../imagenes/imagen-previa.jpg'
    public $imagen_id;                                                 // Nombre del id que en el CSS hace que la imagen cambie al pasar el ratón, reemplaza las otras imágenes en Vinculos
    public $icono;                                                     // Nombre del icono Font Awsome
    public $region_nivel              = 0;                             // Nivel de la región. Le sirve a Relacionados para preferir los que sean de la misma región
    public $estado                    = 'publicar';                    // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
    public $poner_imagen_en_contenido = TRUE;                          // Si es verdadero pondrá la imagen antes que el contenido
    public $include_extra_directorio  = 'include/extra';               // Ruta donde habrá archivos HTML para cargar como el extra de SchemaThing, por ejemplo include/extra
    public $publisher;                                                 // Instancia de SchemaOrganization

    /**
     * Constructor
     */
    public function __construct() {
        // Definir publisher para las publicaciones que hereden SchemaBlogPosting
        $this->publisher                 = new \Base\SchemaOrganization();
        $this->publisher->name           = 'Instituto Municipal de Planeación y Competitividad de Torreón';
        $this->publisher->description    = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón, Coahuila, México.';
        $this->publisher->image          = 'imagenes/implan-logo.png';
        $this->publisher->is_article     = FALSE;
        $this->publisher->big_heading    = FALSE;
        $this->publisher->class_property = 'publicador'; // Estilo CSS que está definido en /dist/css/trcimplan.css
    } // constructor

} // Clase PublicacionConfig

?>
