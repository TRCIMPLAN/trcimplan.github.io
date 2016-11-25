<?php
/*
 * TrcIMPLAN - Banco Municipal de Proyectos de Inversión
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

namespace Proyectos;

/**
 * Clase BancoMunicipalProyectosInversion
 */
class BancoMunicipalProyectosInversion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Banco Municipal de Proyectos de Inversión';
        $this->autor                      = 'Dirección de Proyectos Estratégicos';
        $this->fecha                      = '2014-05-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'banco-municipal-proyectos-inversion';
        $this->imagen                     = 'banco-municipal-proyectos-inversion/imagen.png';
        $this->imagen_previa              = 'banco-municipal-proyectos-inversion/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Instrumento dinámico de gestión pública, para consolidar una cultura de formulación, planeación, seguimiento y evaluación de proyectos de inversión.';
        $this->claves                     = 'IMPLAN, Torreon, Banco, Municipal, Proyectos, Inversion';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón > Proyectos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Proyectos/BancoMunicipalProyectosInversion.md';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array('Gobierno', 'Gobierno Digital');
        $this->fuentes                    = array('Ayuntamiento de Torreón');
        $this->regiones                   = array('Torreón');
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado                     = 'ignorar';
    } // constructor

} // Clase BancoMunicipalProyectosInversion

?>
