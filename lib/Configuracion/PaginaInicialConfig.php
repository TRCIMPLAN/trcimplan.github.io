<?php
/**
 * TrcIMPLAN Sitio Web - Pagina Inicial Config
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

namespace Configuracion;

/**
 * Clase PaginaInicialConfig
 */
class PaginaInicialConfig extends \Base\Plantilla {

    public $imprentas; // Arreglo con rutas a las clases de ImprentaPublicaciones, es usado en Catgorias y UltimasPublicaciones
    public $secciones; // Arreglo con rutas a las clases de las secciones de la página inicial

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Definir propiedades de la plantilla
        $this->en_raiz                  = TRUE;
        $this->titulo                   = 'IMPLAN Torreón';
        $this->autor                    = 'IMPLAN Torreón';
        $this->descripcion              = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón cuyas propuestas de política tienen una orientación territorial.';
        $this->claves                   = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio               = '.';
        $this->archivo_ruta             = "index.html";
        $this->imagen_previa_ruta       = 'imagenes/imagen-previa.jpg';
        $this->contenido_en_renglon     = FALSE;
        $this->google_site_verification = '<meta name="google-site-verification" content="Hz-cnyG17CBaAXopvSHn7J81Za2cmg4dvnRh1VJE7ks">';
        // Definir las secciones, al dividirlas es más fácil activarlas, desactivarlas o cambiar su orden
        $this->secciones   = array();
        $this->secciones[] = '\\PaginaInicial\\Organizacion';
    //~ $this->secciones[] = '\\PaginaInicial\\Aviso';
        $this->secciones[] = '\\PaginaInicial\\Servicios';
        $this->secciones[] = '\\PaginaInicial\\IBC';
        $this->secciones[] = '\\PaginaInicial\\UltimasPublicaciones';
        $this->secciones[] = '\\PaginaInicial\\Categorias';
        $this->secciones[] = '\\PaginaInicial\\Mapas';
        $this->secciones[] = '\\PaginaInicial\\Redes';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Elaborar secciones
        foreach ($this->secciones as $clase) {
            $instancia = new $clase();
            if (property_exists($instancia, 'imprentas')) {
                $instancia->imprentas = $this->imprentas;
            }
            $this->contenido[]  = $instancia->html();
            $this->javascript[] = $instancia->javascript();
        }
        // Entregar resultado del método en el padre
        return parent::html();
    } // html

} // Clase PaginaInicialConfig

?>
