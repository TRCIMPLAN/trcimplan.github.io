<?php
/**
 * TrcIMPLAN - Sesión Ordinaria 2017-12-11
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano
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

namespace SalaPrensa;

/**
 * Clase SesionOrdinaria20171211
 */
class SesionOrdinaria20171211 extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'El IMPLAN presenta ante su consejo el Informe 2014-2017';
    //~ $this->autor                      = 'IMPLAN Staff';
        $this->fecha                      = '2017-12-11T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-12-11-sesion-ordinaria';
        $this->imagen                     = '2017-12-11-sesion-ordinaria/imagen.jpg';
        $this->imagen_previa              = '2017-12-11-sesion-ordinaria/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la Onceava Sesión Ordinaria del Consejo Directivo del IMPLAN Torreón se presentó el resumen ejecutivo de casi cuatro años de trabajo. Sirvió de punto de partida para que los consejeros trabajaran en los nuevos proyectos para la próxima administración municipal.';
        $this->claves                     = 'IMPLAN, Torreon, Sesión, Consejo, Ciudadano';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/SalaPrensa/SesionOrdinaria20171211.html';
        // Para el Organizador
        $this->categorias                 = array();
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
        $this->javascript = $this->cargar_archivo('lib/SalaPrensa/SesionOrdinaria20171211.js');
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
<a href="{$this->archivo}.html"><img src="2017-12-11-sesion-ordinaria/trcimplan-sesion-consejo-201712-34.jpg"></a>
<p>{$this->descripcion}</p>

FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SesionOrdinaria20171211

?>
