<?php
/**
 * TrcIMPLAN Sitio Web - Mesa Salud Laguna
 *
 * Copyright (C) 2016 IMPLAN Torreón
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

namespace PlanEstrategicoMetropolitano;

/**
 * Clase MesaSaludLaguna
 */
class MesaSaludLaguna extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Taller Salud Laguna';
        $this->autor                      = 'Dirección de Proyectos Estratégicos';
        $this->fecha                      = '2015-08-15T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'mesa-salud-laguna';
        $this->imagen                     = 'mesa-salud-laguna/imagen.jpg';
        $this->imagen_previa              = 'mesa-salud-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Lidereado por Salud Laguna donde participaron médicos y directivos de las empresas del sector salud de la ZML.';
        $this->claves                     = 'IMPLAN, Torreon, Salud, Medicos, Laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón > Descripción del proceso';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/PlanEstrategicoMetropolitano/MesaSaludLaguna.html';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Salud');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // Cargar archivo externo
        $this->javascript = $this->cargar_archivo('lib/PlanEstrategicoMetropolitano/MesaSaludLaguna.js');
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
<a href="{$this->archivo}.html"><img src="mesa-salud-laguna/pmsl-01.jpg"></a>
<p>{$this->descripcion}</p>

<!-- Se invita a descargar el archivo PDF -->
<h3>Descargar</h3>
<p><a href="mesa-salud-laguna/presentacion-mesa-salud-laguna.pdf">De clic aquí para descargar la presentación como archivo PDF de 2.4 MB.</a></p>

FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase MesaSaludLaguna

?>
