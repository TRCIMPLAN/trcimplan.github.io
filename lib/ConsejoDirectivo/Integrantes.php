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
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Integrantes del Consejo Directivo';
     // $this->autor            = 'Autor';
        $this->fecha            = '2014-05-01';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'integrantes';
     // $this->imagen_previa    = 'integrantes/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="integrantes/encabezado.jpg">';
        $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Los Integrantes del Consejo Directivo del IMPLAN Torreón.';
        $this->claves           = 'IMPLAN, Torreon, Consejo, Directivo, Integrantes';
        $this->categorias       = array('Consejo Directivo');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'consejo-directivo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Consejo Directivo';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = false;
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL
<p><img class="img-responsive contenido-imagen" src="integrantes/mesa.jpg" alt="Consejo Directivo"></p>

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
            <td>Lic. Olivia Martínez Leyla</td>
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
