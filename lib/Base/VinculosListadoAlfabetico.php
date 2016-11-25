<?php
/**
 * Plataforma de Conocimiento - Vinculos Listado Alfabetico
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
 * Clase VinculosListadoAlfabetico
 */
class VinculosListadoAlfabetico extends Vinculos {

    // public $identificador;
    // protected $vinculos;
    public $imagen_tamano = 0;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Si hay vínculos
        if (count($this->vinculos) > 0) {
            // Iniciar
            $a      = array();
            $b      = array();
            $letra  = NULL;
            $letras = array();
            // Bucle por los vinculos
            foreach ($this->vinculos as $vinculo) {
                // Si es la primera corrida de este bucle
                if ($letra == NULL) {
                    $letra    = strtoupper(substr($vinculo->nombre, 0, 1));
                    $letras[] = $letra;
                    $a[]      = "      <h3 id=\"$letra\" class=\"listado-alfabetico-titulo\">$letra</h3>";
                    $a[]      = "      <ul class=\"listado-alfabetico\">";
                }
                // La primer letra podría estar acentuada o con tilde
                $primera   = mb_substr($vinculo->nombre, 0, 1, 'UTF-8');
                $buscados  = array('Á', 'É', 'Í', 'Ó', 'Ú', 'á', 'é', 'í', 'ó', 'ú');
                $cambios   = array('A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u');
                $especimen = strtoupper(str_replace($buscados, $cambios, $primera));
                // Si es diferente la primera letra
                if ($especimen != $letra) {
                    $a[]      = implode("\n", $b);
                    $a[]      = "        <li class=\"pull-right listado-alfabetico-arriba\"><a href=\"#indice\"><i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i></a></li>";
                    $a[]      = "      </ul>";
                    $letra    = $especimen;
                    $letras[] = $letra;
                    $a[]      = "      <h3 id=\"$letra\" class=\"listado-alfabetico-titulo\">$letra</h3>";
                    $a[]      = "      <ul class=\"listado-alfabetico\">";
                    $b        = array();
                }
                // Acumular el vínculo
                if ($vinculo->url() != '') {
                    $b[] = sprintf("        <li><a href=\"%s\">%s</a></li>", $vinculo->url(), $vinculo->nombre);
                } else {
                    $b[] = sprintf("        <li>%s</li>", $vinculo->nombre);
                }
            }
            // Si al terminar el bucle hay vínculos pendientes
            if (count($b) > 0) {
                $a[] = implode("\n", $b);
                $a[] = "        <li class=\"pull-right listado-alfabetico-arriba\"><a href=\"#indice\"><i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i></a></li>";
                $a[] = "      </ul>";
            }
            // Elaborar letras vinculadas
            $c   = array();
            $c[] = "      <nav aria-label=\"Page navigation\">";
            $c[] = "        <ul id=\"indice\" class=\"pagination\">";
            foreach ($letras as $letra) {
                $c[] = "          <li><a href=\"#$letra\">$letra</a></li>";
            }
            $c[] = "        </ul>";
            $c[] = "      </nav>";
            // Entregar
            return implode("\n", $c)."\n".implode("\n", $a);
        } else {
            return '<!-- Sin vínculos -->';
        }
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase VinculosListadoAlfabetico

?>
