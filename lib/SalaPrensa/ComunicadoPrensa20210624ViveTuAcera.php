<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210624ViveTuAcera
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

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20210624ViveTuAcera
 */
class ComunicadoPrensa20210624ViveTuAcera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN presenta el proyecto ciudadano “Vive Tu Acera”.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-06-24T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-06-24-comunicado-vive-tu-acera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con el respaldo del Alcalde de Torreón, Lic. Jorge Zermeño Infante, el Laboratorio de Gobernanza de la Universidad de Nueva York (GovLab), la Fundación Tinker, Consejo de Nuevo León, dependencias municipales, Asociaciones civiles y la ciudadanía, hoy el IMPLAN Torreón presentó uno de los dos proyectos ciudadanos ganadores de la convocatoria Multi-City Challenge México 2020 llamado “Vive Tu Acera”.';
        $this->claves                     = 'IMPLAN, Torreon, vive tu acera, proyectos, multi-city';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210624ViveTuAcera.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20210624ViveTuAcera

?>
