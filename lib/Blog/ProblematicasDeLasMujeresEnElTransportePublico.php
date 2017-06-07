<?php
/**
 * TrcIMPLAN Sitio Web - Problemáticas de las mujeres en el transporte público
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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

namespace Blog;

/**
 * Clase ProblematicasDeLasMujeresEnElTransportePublico
 */
class ProblematicasDeLasMujeresEnElTransportePublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Problemáticas de las mujeres en el transporte público';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2016-11-30T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'problematicas-de-las-mujeres-en-el-transporte-publico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las usuarias del transporte público en Torreón realizan más de un viaje al trabajo o a la escuela resultado de los roles atribuidos al hogar y la familia. Esto las lleva a enfrentar diversas problemáticas, que son analizadas en un diagnóstico del Programa ONU Mujeres.';
        $this->claves                     = 'IMPLAN, Torreon, Mujeres, Transporte, Traslados, Camiones, Dispersion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProblematicasDeLasMujeresEnElTransportePublico.md';
        // Para el Organizador
        $this->categorias                 = array('Género', 'Grupos Vulnerables', 'Movilidad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase ProblematicasDeLasMujeresEnElTransportePublico

?>
