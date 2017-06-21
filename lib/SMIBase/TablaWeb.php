<?php
/**
 * TrcIMPLAN SMIBase - TablaWeb
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano
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

namespace SMIBase;

/**
 * Clase TablaWeb
 */
class TablaWeb implements SalidaWeb {

    protected $identificador; // Texto único que lo identifica
    protected $estructura;    // Arreglo asociativo con datos de cada columna
    protected $panal;         // Arreglo de arreglos asociativos con instancias de CeldaWeb

    /**
     * Constructor
     *
     * @param string Opcional, texto único que lo identifica
     */
    public function __construct($identificador = NULL) {
        $this->identificador = $identificador;
    } // constructor

    /**
     * Definir estructura
     *
     * @param array Arreglo asociativo con la estructura
     */
    public function definir_estructura($estructura) {
        $this->estructura = $estructura;
    } // definir_estructura

    /**
     * Definir panal
     *
     * @param array Arreglo con arreglos asociativos, con el panal
     */
    public function definir_panal($panal) {
        $this->panal = $panal;
    } // definir_panal

    /**
     * Validar
     */
    protected function validar() {
        if (is_string($this->identificador)) {
            if (!preg_match('/^[A-Za-z0-9_-]+$/', $this->identificador)) {
                throw new \Exception("Error en TablaWeb: Identificador No Válido: {$this->identificador}");
            }
        } else {
            $this->identificador = NULL;
        }
        if ($this->estructura == NULL) {
            throw new \Exception("Error en TablaWeb: Falta la estructura.");
        }
        if ($this->panal == NULL) {
            throw new \Exception("Error en TablaWeb: Falta el panal.");
        }
    } // validar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        $this->validar();
        // Acumular
        $a = array();
        if ($this->identificador != NULL) {
            $a[] = "  <table id=\"{$this->identificador}\" class=\"table table-hover table-bordered\">";
        } else {
            $a[] = "  <table class=\"table table-hover table-bordered\">";
        }
        $a[] = "    <thead>";
        $a[] = "      <tr>";
        $e   = array();
        foreach ($this->estructura as $parametros) {
            $e[] = "        <th>{$parametros['enca']}</th>";
        }
        $a[] = implode("\n", $e);
        $a[] = "      </tr>";
        $a[] = "    </thead>";
        $a[] = "    <tbody>";
        foreach ($this->panal as $fila) {
            $a[] = "      <tr>";
            $r   = array();
            foreach ($this->estructura as $clave => $parametros) {
                $celda = $fila[$clave];
                if (is_object($celda) && ($celda instanceof SalidaWeb)) {
                    if ($parametros['clase'] != '') {
                        $r[] = sprintf("        <td class=\"{$parametros['clase']}>%s</td>", $celda->html());
                    } else {
                        $r[] = sprintf("        <td>%s</td>", $celda->html());
                    }
                } elseif (is_string($celda) && ($celda != '')) {
                    if ($parametros['clase'] != '') {
                        $r[] = "        <td class=\"{$parametros['clase']}\">{$celda}</td>";
                    } else {
                        $r[] = "        <td>{$celda}</td>";
                    }
                } else {
                    $r[] = "        <td class=\"nd\">N/D</td>";
                }
            }
            $a[] = implode("\n", $r);
            $a[] = "      </tr>";
        }
        $a[] = "    </tbody>";
        $a[] = "  </table>";
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        // Validar
        $this->validar();
        // Si se definió el identificador
        if ($this->identificador != NULL) {
            return <<<FINAL
// DataTables
$(document).ready(function(){
  $('#{$this->identificador}').DataTable( {
    "language": {
      "lengthMenu":   "Mostrando _MENU_ filas por página",
      "zeroRecords":  "No se encontró nada",
      "info":         "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty":    "No se encontraron registros",
      "infoFiltered": "(fitrados a partir de un máximo de _MAX_ registros)",
      "search":       "Filtrar:",
      "paginate": {
        "previous":   "Anterior",
        "next":       "Siguiente"
      }
    }
  });
});
FINAL;
        } else {
            return NULL;
        }
    } // javascript

} // Clase TablaWeb

?>
