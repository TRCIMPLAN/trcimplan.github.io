<?php
/*
 * SMIbeta - Institucional Quienes Somos
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
 * Clase QuienesSomos
 */
class QuienesSomos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha            = '2014-05-01';
     // $this->autor            = 'TrcIMPLAN';
        $this->nombre           = 'Quienes Somos';
        $this->nombre_menu      = 'Institucional > Quienes Somos';
        $this->directorio       = 'institucional';
        $this->archivo          = 'quienes-somos';
        $this->descripcion      = 'Los integrantes del IMPLAN Torreón.';
        $this->claves           = 'IMPLAN, Torreon';
     // $this->imagen_previa    = '/imagenes/implan.jpg';
        $this->categorias       = array('Institucional');
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="quienes-somos/encabezado.jpg">';
        $this->encabezado_color = '#750080';
        $this->contenido        = <<<FINAL
<p>El IMPLAN es el Órgano Técnico Descentralizado de la Administración Pública Municipal que coordina los procesos de Planeación Estratégica y Ordenamiento Territorial para el desarrollo de la Región.</p>

<p>Como instrumento de gobernanza, se encarga de crear acuerdos, vínculos, consensos entre la ciudadanía, grupos sociales, empresariales, académicos y gobierno.</p>

<h3>Staff del IMPLAN</h3>

<table class="table table-hover table-bordered">
<tbody>
<tr>
<td class="celda-destacada">Lic. Eduardo Holguín Zehfuss</td>
<td class="celda-destacada">Director General Ejecutivo</td>
</tr>
<tr>
<td>Lic. Miriam Anahi Castillo Díaz</td>
<td>Asistente Presidencia</td>
</tr>
<tr>
<td>Lic. Israel Aaron Rosales García</td>
<td>Secretario Técnico</td>
</tr>
<tr>
<td>Lic. Jesús Alberto Pérez Luethje</td>
<td>Coordinador Jurídico</td>
</tr>
<tr>
<td>Lic. Mariana Segovia Mota</td>
<td>Coordinador Administrativo</td>
</tr>
<tr>
<td>Lic. Irma Judith Ramírez Machain</td>
<td>Contadora</td>
</tr>
<tr>
<td>Lic. Janeth Ramírez Facio</td>
<td>Auxiliar Administrativo</td>
</tr>
<tr>
<td>Ing. Víctor Manuel Gómez Raynoso</td>
<td>Soporte Técnico</td>
</tr>
<tr>
<td>Sra. Olga Lidia Delgado Ramírez</td>
<td>Servicios de Limpieza</td>
</tr>
<tr>
<td class="celda-destacada">Lic. Rodrigo González Morales</td>
<td class="celda-destacada">Director de Investigación Estratégica</td>
</tr>
<tr>
<td>Ing. Guillermo Valdés Lozano</td>
<td>Programación y Software</td>
</tr>
<tr>
<td>Lic. Alfredo Viesca Domínguez</td>
<td>Investigación Cualitativa</td>
</tr>
<tr>
<td>Lic. Luis Gutiérrez Arizpe</td>
<td>Indicadores Sociodemográficos</td>
</tr>
<tr>
<td>Lic. Alicia Valdez Ibarra</td>
<td>Indicadores Económicos</td>
</tr>
<tr>
<td class="celda-destacada">Ing. Luis Alberto Campos Hinojosa</td>
<td class="celda-destacada">Director de Planeación Urbana</td>
</tr>
<tr>
<td>Arq. Jair Miramontes Chávez</td>
<td>Sistemas de Información Geográfica</td>
</tr>
<tr>
<td>Arq. María Ilse Leticia Ávila García</td>
<td>Estudios Sectoriales</td>
</tr>
<tr>
<td>Arq. Teresita de Jesús Benítez Saludado</td>
<td>Regeneración Urbana</td>
</tr>
<tr>
<td>Arq. Daniela Patricia Corral Hernández</td>
<td>Analista SIG</td>
</tr>
<tr>
<td>Lic. Víctor Núñez de la Cruz</td>
<td>Actualización de Planes</td>
</tr>
<tr>
<td>Lic. Hugo Ramírez Martínez</td>
<td>Gestión y Difusión Social</td>
</tr>
<tr>
<td>Arq. Ana Isabel Villarreal Segura</td>
<td>Integración de Proyectos</td>
</tr>
<tr>
<td>Arq. María Susana Montano García</td>
<td>Integración de Proyectos</td>
</tr>
<tr>
<td>Arq. Luly Victoria Aranzábal Estrada</td>
<td>Analista de Costos</td>
</tr>
<tr>
<td>Lic. Israel Sinai Charur Méndez</td>
<td>Difusión y Diseño Gráfico</td>
</tr>
</tbody>
</table>
FINAL;
    } // constructor

} // Clase QuienesSomos

?>
