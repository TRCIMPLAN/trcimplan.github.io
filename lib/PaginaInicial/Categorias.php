<?php
/**
 * TrcIMPLAN Sitio Web - Categorias
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

namespace PaginaInicial;

/**
 * Clase Categorias
 */
class Categorias {

    public $imprentas; // Arreglo con rutas a las clases de ImprentaPublicaciones

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar configuración de las categorías
        $categorias_config = new \Configuracion\CategoriasConfig();
        // Iniciar concentrador
        $concentrador = new \Base\VinculosCompactos();
        // Inicializar el recolector
        $recolector = new \Base\RecolectorCategorias();
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Bucle por todas las categorias
        foreach ($recolector->obtener_categorias() as $nombre) {
            // Obtener instancia de Categoria
            $categoria = $categorias_config->obtener($nombre);
            // Si está definido en \Configuracion\CategoriasConfig
            if ($categoria instanceof \Base\Categoria) {
                // Sí está definido
                $categoria->en_raiz = TRUE;
                $categoria->en_otro = FALSE;
                $vinculo            = new \Base\Vinculo($categoria->nombre, $categoria->url(), $categoria->icono, '', $categoria->descripcion);
                $vinculo->en_raiz   = TRUE;
                $vinculo->en_otro   = FALSE;
                $concentrador->agregar($vinculo);
            } elseif ($categorias_config->mostrar_no_definidos) {
                // No está definido
                $vinculo          = new \Base\Vinculo($nombre, sprintf('%s.html', \Base\Funciones::caracteres_para_web($nombre)), 'unknown', \Base\ImprentaCategorias::CATEGORIAS_DIR);
                $vinculo->en_raiz = TRUE;
                $vinculo->en_otro = FALSE;
                $concentrador->agregar($vinculo);
            }
        }
        // Acumular
        $a   = array();
        $a[] = '  <section id="categorias">';
        $a[] = '    <h2>Categorías</h2>';
        $a[] = sprintf('    <p>Explore por medio de las categorías que clasifican las %s publicaciones en este sitio web.</p>', number_format($recolector->obtener_cantidad_de_publicaciones(), 0, ".", ","));
        $a[] = $concentrador->html();
        $a[] = '  </section>';
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return NULL;
    } // javascript

} // Clase Categorias

?>
