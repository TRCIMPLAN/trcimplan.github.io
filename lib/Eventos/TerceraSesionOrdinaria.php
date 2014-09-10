<?php
/*
 * SMIbeta - Tercera Sesión Ordinaria
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
namespace Eventos;

/**
 * Clase TerceraSesionOrdinaria
 */
class TerceraSesionOrdinaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-08-26';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Tercera Sesión Ordinaria del Consejo Directivo del IMPLAN';
        $this->nombre_menu   = 'Eventos';
        $this->directorio    = 'eventos';
        $this->archivo       = 'tercera-sesion-ordinaria';
        $this->descripcion   = 'Con el título "230 días del IMPLAN" se dió el informe donde fué reconocida la conformación de bases sólidas para la creación de una ciudad planeada y competitiva.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'tercera-sesion-ordinaria/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<img class="img-responsive contenido-imagen" src="tercera-sesion-ordinaria/tercera-sesion.jpg" alt="Tercera Sesión Ordinaria">

<p>En días pasados se llevó a cabo en un hotel de la localidad la <b>Tercera Sesión Ordinaria del Consejo Directivo del IMPLAN</b>, teniendo como tema el informe de actividades: "230 días del IMPLAN" además de coordinar las labores de participación de los integrantes del Consejo en la elaboración del Plan Estratégico Metropolitano.</p>

<p>Fue en punto de las 8 de la mañana en que se dio la bienvenida por parte del Director Ejecutivo del IMPLAN al Consejo Directivo conformado por Instituciones Educativas, miembros del Cabildo, Empresarios, ONG´S, funcionarios públicos, ciudadanos distinguidos y el Alcalde la ciudad, quien se mostró satisfecho por las actividades desarrolladas por el Instituto a poco más de siete meses de su creación.</p>

<p>Al momento de tomar la palabra, el Ing. Miguel Ángel Riquelme Solís, felicitó al IMPLAN por la labor desempeñada en 230 días de trabajo y por la conformación de bases sólidas para la creación de una ciudad planeada y competitiva.</p>

<p>De igual forma agradeció al Consejo Directivo su constante participación a las mesas y comisiones que se han generado por parte del IMPLAN, para ordenar y planear el futuro de nuestra ciudad y los exhortó a seguir con la misma actitud de servicio ya que como él mencionó: Torreón es de Todos.</p>

<p>Por su parte el Consejo Directivo, de manera general, reviso acuerdos que se llevaron a cabo en la reunión anterior, se establecieron nuevas rutas de trabajo y se formularon acuerdos para seguir avanzando en la planeación estratégica de Torreón y su Zona Metropolitana.</p>

<p>Una tarea fundamental del IMPLAN es elevar los indicadores que reflejan el funcionamiento de la Ciudad y su Zona Metropolitana por lo que de seguir trabajando de manera conjunta, Torreón subirá en los distintos rankings de competitividad convirtiéndose en fuerte candidato para inversión y sin duda mejoran el nivel de vida de quienes lo habitamos.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase TerceraSesionOrdinaria

?>
