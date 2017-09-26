<?php
/**
 * TrcIMPLAN Sitio Web - IMPLANFirmaConvenioConElClusterAutomotriz
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
 * Clase IMPLANFirmaConvenioConElClusterAutomotriz
 */
class IMPLANFirmaConvenioConElClusterAutomotriz extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN firma convenio con el Clúster Automotriz';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2017-08-31T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-08-31-implan-firma-convenio-con-el-cluster-automotriz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En la Octava Sesión de Consejo Directivo realizada el pasado 31 de agosto, el IMPLAN llevó a cabo la firma de un convenio de colaboración con el Clúster Automotriz Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Cluster Automotriz, Convenio';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/IMPLANFirmaConvenioConElClusterAutomotriz.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Empresas');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase IMPLANFirmaConvenioConElClusterAutomotriz

?>
