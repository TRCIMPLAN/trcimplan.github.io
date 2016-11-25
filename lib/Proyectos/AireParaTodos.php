<?php
/**
 * TrcIMPLAN - Aire Para Todos
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
 * Clase AireParaTodos
 */
class AireParaTodos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Aire Para Todos';
        $this->autor                      = 'Dirección de Proyectos Estratégicos';
        $this->fecha                      = '2016-08-18T11:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'aire-para-todos';
        $this->imagen                     = 'aire-para-todos/imagen.jpg';
        $this->imagen_previa              = 'aire-para-todos/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Taller sobre el Bosque Venustiano Carranza. Presentaciones sobre la Historia, Entorno Sociourbano y Medio Ambiente del BVC.';
        $this->claves                     = 'IMPLAN, Torreon, Areas Verdes, Sustentabilidad, Bosque';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón > Proyectos';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Proyectos/AireParaTodos.html';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Participación Ciudadana', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // Cargar archivo externo
        $this->javascript = $this->cargar_archivo('lib/Proyectos/AireParaTodos.js');
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
<a href="{$this->archivo}.html"><img src="aire-para-todos/aire-para-todos-00.jpg"></a>
<p>{$this->descripcion}</p>

FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase AireParaTodos

?>
