<?php
/**
 * TrcIMPLAN Sitio Web - DelCleroAlMatrimonioIgualitario
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
 * Clase DelCleroAlMatrimonioIgualitario
 */
class DelCleroAlMatrimonioIgualitario extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Del clero al matrimonio igualitario: La TRANSformación de las uniones conyugales';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2020-06-16T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'del-clero-al-matrimonio-igualitario-junio-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los registros civiles otorgan información valiosa sobre las diversas etapas de vida de la sociedad; contemplando nacimientos, defunciones, uniones y separaciones conyugales. El evento que ha tenido mayor modificación a lo largo del tiempo es el registro de las uniones conyugales, primero en 1859, cuando se instituyó el Registro Civil en México, y se oficializó la unión desde el estado y no desde el clero, y, en tiempos más recientes, su aprobación legal entre personas del mismo sexo.';
        $this->claves                     = 'IMPLAN, Torreon, matrimonio, sexo, uniones';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DelCleroAlMatrimonioIgualitario.md';
        // Para el Organizador
        $this->categorias                 = array('Género');
        $this->fuentes                    = array('Forbes','Congreso del Estado de Coahuila de Zaragoza');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DelCleroAlMatrimonioIgualitario

?>
