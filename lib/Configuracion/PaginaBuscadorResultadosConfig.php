<?php
/**
 * TrcIMPLAN Sitio Web - Pagina Buscador Resultados Config
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
 * Clase PaginaBuscadorResultadosConfig
 */
class PaginaBuscadorResultadosConfig extends \Base\Plantilla {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor del padre
        parent::__construct();
        // Definir propiedades
        $this->en_raiz      = TRUE;
        $this->titulo       = 'Resultados de la búsqueda en Google';
        $this->descripcion  = 'Resultados de la búsqueda en Google.';
        $this->claves       = 'Resultados, Buscador';
        $this->directorio   = '.';
        $this->archivo_ruta = "buscador-resultados.html";
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Indicar al padre que no queremos encerrar el contenido con row y cuerpo
        $this->contenido_en_renglon = FALSE;
        // Navegacion
        $this->navegacion          = new \Base\Navegacion();
        $this->navegacion->en_raiz = $this->en_raiz;
        // El contenido es código HTML que proviene y es para el Buscador de Google
        $this->contenido[] = <<<FINAL
  <div>
    <script>
      (function() {
        var cx = '012497033331443751819:4788vo1few8';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    <gcse:searchresults-only></gcse:searchresults-only>
  </div>
FINAL;
        // Del mismo modo, este código Javascript proviene y es para el Buscador de Google
        $this->javascript[] = <<<FINAL
FINAL;
        // Entregar resultado del método en el padre
        return parent::html();
    } // html

} // Clase PaginaBuscadorResultadosConfig

?>
