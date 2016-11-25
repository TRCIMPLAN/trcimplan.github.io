<?php
/**
 * TrcIMPLAN Sitio Web - Plan Estrategico Drenaje Pluvial Torreon
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

namespace Proyectos;

/**
 * Clase PlanEstrategicoDrenajePluvialTorreon
 */
class PlanEstrategicoDrenajePluvialTorreon extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Plan Estratégico de Drenaje Pluvial de Torreón';
        $this->autor                      = 'Dirección de Proyectos Estratégicos';
        $this->fecha                      = '2016-08-04T14:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'plan-estrategico-drenaje-pluvial-torreon';
        $this->imagen                     = 'plan-estrategico-drenaje-pluvial-torreon/imagen.jpg';
        $this->imagen_previa              = 'plan-estrategico-drenaje-pluvial-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Diagnóstico y Lineamientos para la elaboración del Plan Estratégico de Drenaje Pluvial de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Drenaje, Pluvial';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón > Proyectos';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el archivo HTML seguido del archivo Markdown
        $this->contenido->articleBody =
            $this->cargar_archivo('lib/Proyectos/PlanEstrategicoDrenajePluvialTorreon.html').
            $this->cargar_archivo_markdown_extra('lib/Proyectos/PlanEstrategicoDrenajePluvialTorreon.md');
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // Cargar archivo externo
        $this->javascript = $this->cargar_archivo('lib/Proyectos/PlanEstrategicoDrenajePluvialTorreon.js');
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Contenido especial para redifusión
        $this->redifusion = <<<FINAL
<!-- Mostrar la primer imagen de la presentación como vínculo a la página -->
<a href="{$this->archivo}.html"><img src="plan-estrategico-drenaje-pluvial-torreon/trcimplan-plan-estrategico-drenaje-pluvial-torreon-00.jpg"></a>
<p>{$this->descripcion}</p>

FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase PlanEstrategicoDrenajePluvialTorreon

?>
