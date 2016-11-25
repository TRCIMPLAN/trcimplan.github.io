<?php
/**
 * Plataforma de Conocimiento - Creador
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase Creador
 *
 * Esta clase coordina los conjuntos de programas que crean el sitio web. Se ejecuta desde bin/Crear.php
 */
class Creador extends \Configuracion\CreadorConfig {

    // public $imprentas;
    // public $imprentas_autores;
    // public $imprentas_categorias;
    // public $imprentas_pagina_inicial;
    // public $imprentas_mapa_sitio;
    // public $imprentas_redifusion;
    // public $imprentas_json;
    // public $imprentas_csv;

    /**
     * Imprimir
     */
    public function imprimir() {
        // Imprimir publicaciones
        if (isset($this->imprentas)) {
            $total_publicaciones = 0;
            foreach ($this->imprentas as $objeto) {
                $imprenta = new $objeto();
                $imprenta->imprimir();
                if (isset($imprenta->contador) && ($imprenta->contador > 0)) {
                    $total_publicaciones += $imprenta->contador;
                }
                unset($imprenta);
            }
        }
        // Imprimir categorías
        if (isset($this->imprentas_categorias)) {
            $imprenta = new ImprentaCategorias($this->imprentas_categorias);
            $imprenta->imprimir();
            unset($imprenta);
        }
        // Imprimir autores
        if (isset($this->imprentas_autores)) {
            $imprenta = new ImprentaAutores($this->imprentas_autores);
            $imprenta->imprimir();
            unset($imprenta);
        }
        // Imprimir página inicial (index.html)
        if (isset($this->imprentas_pagina_inicial)) {
            $imprenta = new ImprentaPaginaInicial($this->imprentas_pagina_inicial);
            $imprenta->imprimir();
            unset($imprenta);
        }
        // Imprimir mapa del sitio (sitemap.xml)
        if (isset($this->imprentas_mapa_sitio)) {
            $imprenta = new ImprentaMapaSitio($this->imprentas_mapa_sitio);
            $imprenta->imprimir();
            unset($imprenta);
        }
        // Imprimir redifusión (RSS feed)
        if (isset($this->imprentas_redifusion)) {
            $imprenta_redifusion = new ImprentaRedifusion($this->imprentas_redifusion);
            $imprenta_redifusion->imprimir();
            unset($imprenta_redifusion);
        }
        // Imprimir página para los resultados del buscador
        $imprenta = new ImprentaPaginaBuscadorResultados();
        $imprenta->imprimir();
        unset($imprenta);
        // Imprimir archivos JSON
        if (isset($this->imprentas_json)) {
            $total_json = 0;
            foreach ($this->imprentas_json as $imprenta) {
                $imprenta = new $imprenta();
                $imprenta->imprimir();
                if (isset($imprenta->contador) && ($imprenta->contador > 0)) {
                    $total_json += $imprenta->contador;
                }
                unset($imprenta);
            }
        }
        // Imprimir archivos CSV
        if (isset($this->imprentas_csv)) {
            $total_csv = 0;
            foreach ($this->imprentas_csv as $imprenta) {
                $imprenta = new $imprenta();
                $imprenta->imprimir();
                if (isset($imprenta->contador) && ($imprenta->contador > 0)) {
                    $total_csv += $imprenta->contador;
                }
                unset($imprenta);
            }
        }
        // Mostrar totales
        echo "Totales de archivos creados...\n";
        echo "  Publicaciones: $total_publicaciones\n";
        echo "  JSON:          $total_json\n";
        echo "  CSV:           $total_csv\n";
    } // imprimir

} // Clase Creador

?>
