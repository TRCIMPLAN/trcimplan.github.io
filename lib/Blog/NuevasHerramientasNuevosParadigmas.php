<?php
/*
 * SMIbeta - Nuevas herramientas para Nuevos Paradigmas
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
 * Clase NuevasHerramientasNuevosParadigmas
 */
class NuevasHerramientasNuevosParadigmas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-09-23';
        $this->autor         = 'Arq. Daniela Patricia Corral Hernández';
        $this->nombre        = 'Nuevas herramientas para Nuevos Paradigmas';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'nuevas-herramientas-nuevos-paradigmas';
        $this->descripcion   = 'Hoy en día, con un teléfono inteligente o tablet se puede consultar la versión móvil de un SIG para recaudar información, emitir un diagnóstico y trabajar en planes programas y proyectos futuros.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'nuevas-herramientas-nuevos-paradigmas/imagen-previa.jpg';
        $this->categorias    = array('Innovación', 'SIG');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="nuevas-herramientas-nuevos-paradigmas/imagen.jpg"></span>

<p>En las últimas décadas las tecnologías de información y comunicación han revolucionado el desarrollo, implementación, almacenamiento y distribución de la información utilizando diferentes medios. Los Sistemas de información Geográfica (SIG) como bases de datos georeferenciadas que se reflejan en mapas digitales, han evolucionado rápidamente ligados al crecimiento de las tecnologías de la información, ofreciendo e integrando cada vez más aplicaciones técnicas para la gestión y procesamiento de los datos espaciales en el software.</p>

<p>Los SIG ofrecen una gran variedad de utilidades y aplicaciones relacionadas con los trabajos específicos de ordenamiento urbano y planificación territorial, facilitan el procesamiento y la integración de la información, en particular ayudan a realizar análisis con diferentes hipótesis, o aspiraciones, y crear escenarios futuros.</p>

<p>Teniendo la información, se generan los mapas, como principal representación gráfica en diversos formatos. Para la producción de mapas se necesita que la información cartográfica este actualizada, para la descripción, evaluación y diseño.</p>

<p>Actualmente los medios electrónicos son cada vez más baratos, por lo cual es más sencillo ver proyectado un mapa en una pantalla a verlo en papel, un mapa aclara enormemente la situación territorial, homogeneiza el conocimiento, permite plantear alternativas con mucha mayor flexibilidad, para que todo esto sirva para la toma de decisiones. Actualmente se trabaja con las diferentes dependencias para recaudar la información necesaria y lograr un resultado eficiente y eficaz, para poder emitir un diagnóstico de la ciudad, así mismo trabajar en planes programas y proyectos futuros.</p>

<a href="nuevas-herramientas-nuevos-paradigmas/02-sig-maternidad-adolescente.jpg"><img class="contenido-imagen" src="nuevas-herramientas-nuevos-paradigmas/02-sig-maternidad-adolescente-previa.jpg" alt="Maternidad Adolescente"></a>
<a href="nuevas-herramientas-nuevos-paradigmas/03-sig-viviendas-internet.jpg"><img class="contenido-imagen" src="nuevas-herramientas-nuevos-paradigmas/03-sig-viviendas-internet-previa.jpg" alt="Viviendas con Internet"></a>
<a href="nuevas-herramientas-nuevos-paradigmas/04-sig-viviendas-drenaje.jpg"><img class="contenido-imagen" src="nuevas-herramientas-nuevos-paradigmas/04-sig-viviendas-drenaje-previa.jpg" alt="Viviendas con Drenaje"></a>
<a href="nuevas-herramientas-nuevos-paradigmas/05-sig-viviendas-agua.jpg"><img class="contenido-imagen" src="nuevas-herramientas-nuevos-paradigmas/05-sig-viviendas-agua-previa.jpg" alt="Viviendas con Agua"></a>

<p>Debido al avance de la tecnología se busca implementar el SIG como herramienta de consulta en una plataforma móvil (SIG MOVIL), que se brinde en acceso libre a la población, lo único que se necesitará para poder acceder a esta plataforma seria:</p>

<ul>
    <li>Dispositivo móvil.</li>
    <li>Acceso inalámbrico a Internet.</li>
</ul>

<p>Las comunicaciones inalámbricas y la computación móvil lucen como tecnologías claves en siglo 21. Con más de 4 billones de suscriptores de celulares (ITU 2009), han ganado la aceptación mundial con una velocidad que ha superado a muchas otras innovaciones técnicas. La proliferación de los teléfonos celulares y otros dispositivos móviles, junto con la necesidad fundamental de la sola conveniencia, ha dado lugar a la proliferación de los SIG móvil. Es decir SIG en dispositivos móviles.</p>

<img class="img-responsive contenido-imagen" src="nuevas-herramientas-nuevos-paradigmas/06-ipad.jpg" alt="SIG móvil">

<p>Es importante introducir los SIG móviles en el contexto de los SIG WEB. Los SIG móviles emergen a mediados de la década de los 90, para cubrir las necesidades del trabajo de campo como relevamientos y mantenimiento de redes de infraestructura. Estos sistemas inicialmente operaban principalmente en modo desconectado. Pero con el avance radical en las comunicaciones inalámbricas, especialmente las que operan en redes 3G, los SIG móviles están conectados crecientemente a la WEB, y los hace parte de los SIG WEB. Los SIG móviles pueden actualizar a los servidores con la última información desde el campo. Los servidores WEB pueden, a su vez, proveer apoyo a los SIG móviles con su rico contenido y análisis avanzado.</p>

<img class="img-responsive contenido-imagen" src="nuevas-herramientas-nuevos-paradigmas/07-sig-web.jpg" alt="SIG web">

<p>Con esto se pretende poder tener un mejor panorama de la ciudad, poder generar diagnósticos y planes a largo plazo y a su vez mantener a la población bien informada.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase NuevasHerramientasNuevosParadigmas

?>
