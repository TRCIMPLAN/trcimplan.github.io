<?php
/*
 * TrcIMPLAN Sitio Web - SMI Indicadores Georreferenciados
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
namespace SMI;

/**
 * Clase Georreferenciados
 */
class Georreferenciados extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Indicadores Georreferenciados';
        $this->autor            = '';
        $this->fecha            = '2014-11-18T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'georreferenciados';
        $this->imagen_previa    = '';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Listado de los indicadores que tienen mapas georreferenciados';
        $this->claves           = 'IMPLAN, Torreon, Indicadores, Georreferenciados';
        $this->categorias       = array('SMI');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'smi';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores > Georreferenciados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido
        $this->contenido        = <<<FINAL

<ul>
    <li><a href="../indicadores-torreon/sociedad-maternidad-adolescente.html">Maternidad Adolescente</a></li>
    <li><a href="../indicadores-torreon/sustentabilidad-viviendas-deshabitadas.html">Viviendas Deshabitadas</a></li>
    <li><a href="../indicadores-torreon/sociedad-viviendas-con-agua-de-la-red-publica.html">Viviendas con Agua de la Red Pública</a></li>
    <li><a href="../indicadores-torreon/sociedad-viviendas-con-computadora.html">Viviendas con Computadora</a></li>
    <li><a href="../indicadores-torreon/sociedad-viviendas-con-drenaje.html">Viviendas con Drenaje</a></li>
    <li><a href="../indicadores-torreon/sociedad-viviendas-con-energia-electrica.html">Viviendas con Energía Eléctrica</a></li>
    <li><a href="../indicadores-torreon/sociedad-viviendas-con-internet.html">Viviendas con Internet</a></li>
    <li><a href="../indicadores-torreon/sociedad-viviendas-que-disponen-de-retrete.html">Viviendas que Disponen de Retrete</a></li>
</ul>

FINAL;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase Georreferenciados

?>
