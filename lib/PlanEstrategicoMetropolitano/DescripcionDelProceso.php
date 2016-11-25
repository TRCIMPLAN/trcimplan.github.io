<?php
/**
 * TrcIMPLAN Sitio Web - Descripción del Proceso
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
 * Clase DescripcionDelProceso
 */
class DescripcionDelProceso extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Descripción del Proceso';
        $this->autor                      = 'Dirección de Proyectos Estratégicos';
        $this->fecha                      = '2015-12-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'descripcion-del-proceso';
        $this->imagen                     = 'introduccion/imagen.jpg';
        $this->imagen_previa              = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cuatro talleres participativos cada uno con seis mesas de trabajo en cada eje.';
        $this->claves                     = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, Plan, Estrategico, Metropolitano, Descripcion';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón > Descripción del proceso';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/PlanEstrategicoMetropolitano/DescripcionDelProceso.md';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase DescripcionDelProceso

?>
