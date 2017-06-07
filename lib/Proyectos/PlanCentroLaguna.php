<?php
/**
 * TrcIMPLAN Sitio Web- Plan Centro Laguna
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
 * Clase PlanCentroLaguna
 */
class PlanCentroLaguna extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Plan Centro Laguna';
        $this->fecha                      = '2015-07-30T15:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'plan-centro-laguna';
        $this->imagen                     = 'plan-centro-laguna/imagen.jpg';
        $this->imagen_previa              = 'plan-centro-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Regeneración urbana que promueve la integración social, la reactivación económica, la valorización del patrimonio histórico y cultural y la habitabilidad del espacio público.';
        $this->claves                     = 'IMPLAN, Torreon, Plan, Centro, La Laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón 2040 > Proyectos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Proyectos/PlanCentroLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vialidad');
        $this->fuentes                    = array('IMPLAN', 'Instituto de Políticas para el Transporte y el Desarrollo (ITDP)');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PlanCentroLaguna

?>
