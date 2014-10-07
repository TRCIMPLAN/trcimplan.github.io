<?php
/*
 * SMIbeta - Economía del Sector Salud en La Laguna
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
namespace Blog;

/**
 * Clase EconomiaSectorSaludLaguna
 */
class EconomiaSectorSaludLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Economía del Sector Salud en La Laguna';
        $this->autor         = 'Lic. Alicia Valdez Ibarra';
        $this->fecha         = '2014-10-07';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'economia-sector-salud-laguna';
        $this->imagen_previa = 'economia-sector-salud-laguna/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="economia-sector-salud-laguna/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.';
        $this->claves        = 'IMPLAN, Torreon, Salud';
        $this->categorias    = array('Blog', 'Salud');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio    = 'blog';
        $this->nombre_menu   = 'Análisis Publicados';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="economia-sector-salud-laguna/imagen.jpg"></span>

<h3>Contexto nacional e internacional</h3>

<ul>
    <li>En 2012 el gasto total de México en salud representó 6.2% de su PIB (OCDE, 2014).</li>
    <li>En México alrededor de la mitad del gasto en salud es del sector privado (OCDE, 2014).</li>
    <li>En 2012 el promedio de gasto en salud de los países de la OCDE fue de 9,3% del PIB (OCDE, 2014).</li>
    <li>La oferta de trabajadores en el sector salud en México ha aumentado en la última década (OCDE, 2014):</li>
    <li><ul>
        <li>Del 2000 al 2012 el número de médicos por cada mil habitantes en México aumentó de 1.6 a 2.2 (OCDE, 2014).</li>
        <li>En 2012 el promedio de los países de la OCDE fue de 3.2 médicos por cada mil habitantes (OCDE, 2014).</li>
    </ul></li>
    <li>A nivel nacional el sector salud ocupa 2.90% del personal ocupado (INEGI. Censos económicos 2009).</li>
</ul>

<h3>Zona Metropolitana de La Laguna</h3>

<ul>
    <li>3.15% del personal ocupado de La Laguna trabaja en el sector salud (INEGI. Censos económicos 2009).</li>
    <li>Torreón emplea 78% del personal ocupado en el sector salud en la zona metropolitana de La Laguna (INEGI. Censos económicos 2009).</li>
    <li>43.51% de la producción del sector salud en la zona metropolitana es valor agregado. Cifra mayor a la aportada por la manufactura, agricultura, construcción y minería.</li>
    <li>De 1999 a 2009, el comportamiento del sector salud en la Zona Metropolitana de La Laguna fue el siguiente:</li>
    <li><ul>
        <li>El personal ocupado creció 146.31%</li>
        <li>La producción Bruta creció 171.82%</li>
        <li>El valor agregado Aumentó 136.83%</li>
    </ul></li>
</ul>

<img class="img-responsive contenido-imagen" src="economia-sector-salud-laguna/01-distribucion-del-valor-agregado-sector-salud-laguna.png" alt="Distribución del Valor Agregado en el Sector Salud de La Laguna">

<img class="img-responsive contenido-imagen" src="economia-sector-salud-laguna/02-personal-ocupado-sector-salud-laguna.png" alt="Personal Ocupado en el Sector Salud de La Laguna">

<img class="img-responsive contenido-imagen" src="economia-sector-salud-laguna/03-valor-agregado-sector-salud-laguna.png" alt="Valor Agregado en el Sector Salud de La Laguna">

<img class="img-responsive contenido-imagen" src="economia-sector-salud-laguna/04-productividad-laboral-sector-salud-laguna.png" alt="Productividad Laboral en el Sector Salud de la Laguna">
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase EconomiaSectorSaludLaguna

?>
