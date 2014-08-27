<?php
/*
 * SMIbeta - Consejo Directivo Integrantes
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
namespace ConsejoDirectivo;

/**
 * Clase Integrantes
 */
class Integrantes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-05-01';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Integrantes del Consejo Directivo';
        $this->nombre_menu   = 'Integrantes';
        $this->directorio    = 'consejo-directivo';
        $this->archivo       = 'integrantes';
        $this->descripcion   = 'Los Integrantes del Consejo Directivo del IMPLAN Torreón.';
        $this->claves        = 'IMPLAN, Torreon, Consejo, Directivo, Integrantes';
     // $this->imagen_previa = 'directorio/imagen-previa.jpg';
        $this->categorias    = array('Consejo Directivo');
     // $this->encabezado    = '<img class="img-responsive" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<p><img class="img-responsive contenido-imagen" src="consejo-directivo/mesa.jpg" alt="Consejo Directivo"></p>

<h4>El <strong>Consejo Directivo</strong> está conformado de la siguiente manera:</h4>

<table class="table table-hover table-bordered">
    <tbody>
        <tr>
            <th colspan="2">AYUNTAMIENTO</th>
        </tr>
        <tr>
            <td>Ing. Miguel Ángel Riquelme Solís</td>
            <td>Presidente Municipal y Presidente del Consejo del IMPLAN</td>
        </tr>
        <tr>
            <td>Lic. Eduardo Holguín</td>
            <td>Director Ejecutivo del IMPLAN</td>
        </tr>
        <tr>
            <td>Ing. Gabriel Calvillo Ceniceros</td>
            <td>Titular Responsable del Área de Desarrollo Urbano del Ayuntamiento</td>
        </tr>
        <tr>
            <td>M.C. Mario Valdéz Garza</td>
            <td>Presidente de la Comisión de Urbanismo y Obras Públicas del Ayuntamiento</td>
        </tr>
        <tr>
            <td>Lic. Miguel Mery Ayup</td>
            <td>Presidente de la Comisión de Hacienda, Patrimonio y Cuenta Pública del Ayuntamiento</td>
        </tr>
        <tr>
            <td>C. Sergio Lara Galván</td>
            <td>Presidente de la Comisión de Desarrollo Económico del Ayuntamiento</td>
        </tr>
        <tr>
            <td><em>VACANTE</em></td>
            <td>Presidente de la Comisión de Planeación y Competitividad</td>
        </tr>
        <tr>
            <th colspan="2">REPRESENTANTES SECTORIALES</th>
        </tr>
        <tr>
            <td>Ing. Hugo René Noe Lazcano</td>
            <td>Colegio de Ingenieros Civiles de La Laguna A.C.</td>
        </tr>
        <tr>
            <td>Arq. Tomás Galván Camacho</td>
            <td>Cámara Mexicana de la Industria de la Construcción</td>
        </tr>
        <tr>
            <td>Carlos Fernández Gómez</td>
            <td>Fomento Económico Laguna de Coahuila A.C.</td>
        </tr>
        <tr>
            <td>Eduardo Castañeda Martínez</td>
            <td>Consejo Lagunero de la Iniciativa Privada</td>
        </tr>
        <tr>
            <td>Cecilia del Carmen Cardiel Escamilla</td>
            <td>Consejo ONG’s de La Laguna A.C.</td>
        </tr>
        <tr>
            <td>Ing. Ignacio Chong López</td>
            <td>Consejo Lagunero del Agua A.C.</td>
        </tr>
        <tr>
            <td>José Sánchez Izquierdo</td>
            <td>Consejo Municipal de Desarrollo Urbano</td>
        </tr>
        <tr>
            <td>Miguel Ángel Cisneros Guerrero</td>
            <td>CIESLAG</td>
        </tr>
        <tr>
            <td>Martha Silvia Argüelles Molina</td>
            <td>CIESLAG</td>
        </tr>
        <tr>
            <th colspan="2">CIUDADANOS</th>
        </tr>
        <tr>
            <td>Victor Hugo Torres Romo</td>
            <td>Colegio de Arquitectos</td>
        </tr>
        <tr>
            <td>Javier Ramos Salas</td>
            <td>Ciudadano Distinguido</td>
        </tr>
        <tr>
            <td>Martín López Méndez</td>
            <td>ITESM</td>
        </tr>
        <tr>
            <td>Rafael Rebollar</td>
            <td>Peñoles</td>
        </tr>
        <tr>
            <td>Hector Acuña Nogueira</td>
            <td>Director UIA</td>
        </tr>
        <tr>
            <td>Francisco Valdés Pérez Gazga</td>
            <td>PRODENAZAS</td>
        </tr>
    </tbody>
</table>
FINAL;
    } // constructor

} // Clase Integrantes

?>
