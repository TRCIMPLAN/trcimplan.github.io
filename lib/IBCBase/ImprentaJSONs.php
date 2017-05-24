<?php
/**
 * TrcIMPLAN IBCBase - ImprentaJSONs
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase ImprentaJSONs
 */
class ImprentaJSONs extends \Base\Imprenta {

    public    $directorio;                                    // Texto, nombre del directorio en raíz donde se guardarán los archivos
    public    $publicaciones_directorio;                      // Texto, nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    protected $archivo_ruta;                                  // Texto opcional, ruta al archivo index
    protected $recolector;                                    // Instancia de \Base\Recolector
    public    $contador = 0;                                  // Entero, cantidad de publicaciones producidas
    protected $indice   = array();                            // Arreglo asociativo con los nombres y rutas
    const     SITIO_URL = 'http://www.trcimplan.gob.mx/beta'; // Sin diagonal al final

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector = new \Base\Recolector();
    } // constructor

    /**
     * Validar
     */
    protected function validar() {
        // Validar publicaciones_directorio
        if (!is_string($this->publicaciones_directorio) || ($this->publicaciones_directorio == '')) {
            throw new \Exception("Falló la validación en ImprentaJSONs: No se ha definido el directorio de publicaciones.");
        }
        $lib_dir = sprintf('%s/%s', \Base\Recolector::LIB_DIR, $this->publicaciones_directorio);
        if (!is_dir($lib_dir)) {
            throw new \Exception("Falló la validación en ImprentaJSONs: No existe el directorio $lib_dir");
        }
        // Validar directorio
        if (!is_string($this->directorio) || ($this->directorio == '')) {
            $this->directorio = \Base\Funciones::caracteres_para_web($this->publicaciones_directorio);
        }
        // Validar archivo_ruta
        if (!is_string($this->archivo_ruta) || ($this->archivo_ruta == '')) {
            $this->archivo_ruta = "{$this->directorio}/{$this->directorio}.json";
        }
    } // validar

    /**
     * Elaborar contenido JSON
     *
     * @param  mixed  Instancia de Publicacion
     * @return string Código JSON, texto para ser el contenido del archivo
     */
    protected function elaborar_json(\Base\Publicacion $publicacion) {
        // Debe tener el método datos
        if (method_exists($publicacion, 'datos')) {
            $e = array();
            // Bucle por los datos
            foreach ($publicacion->datos() as $eje => $fechas) {
                $fecha       = Eje::FECHA;
                $indicadores = $fechas[$fecha]; // TODO: Que pueda trabajar con más de una fecha
                $i           = array();
                foreach ($indicadores as $indicador => $valor) {
                    if (is_int($valor) || is_float($valor)) {
                        $i[] = sprintf('        "%s":%s', $indicador, $valor);
                    } else {
                        $i[] = sprintf('        "%s":"%s"', $indicador, $valor);
                    }
                }
                if (count($i) > 0) {
                    $f   = sprintf('      "%s":{%s      }', $fecha, "\n".implode(",\n", $i)."\n");
                    $e[] = sprintf('    "%s":{%s    }', $eje, "\n$f\n");
                }
            }
            if (count($e) > 0) {
                $j   = array();
                $j[] = '[{';
                $j[] = sprintf('  "Nombre":"%s",', $publicacion->nombre);
                $j[] = sprintf('  "IBC":{%s  }', "\n".implode(",\n", $e)."\n");
                $j[] = '}]';
                return implode("\n", $j)."\n";
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    } // elaborar_json

    /**
     * Imprimir archivos JSON
     */
    protected function imprimir_archivos() {
        // Validar que haya publicaciones
        if ($this->recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Aviso en ImprentaJSONs: No hay publicaciones para crear los archivos JSON.");
        }
        // Iniciar contador en cero
        $this->contador = 0;
        // Bucle en las publicaciones
        foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
            // Determinar la ruta al archivo a crear
            if ($publicacion->directorio != '') {
                $dir = $publicacion->directorio;
            } else {
                $dir = $this->directorio;
            }
            if (!is_dir($dir)) {
                throw new \Exception("Error en ImprentaJSONs: No existe el directorio de destino $dir");
            }
            $archivo_ruta = sprintf('%s/%s.json', $dir, $publicacion->archivo);
            // Elaborar contenido
            $json = $this->elaborar_json($publicacion);
            // Si hay contenido se crea el archivo, de lo contrario se elimina
            if (is_string($json)) {
                $this->crear_archivo($archivo_ruta, $json);
                $this->indice[$publicacion->nombre] = $archivo_ruta;
                $this->contador++;
            } else {
                $this->eliminar_archivo($archivo_ruta);
            }
        }
        // Poner mensaje
        echo " {$this->contador} en {$this->directorio} ";
    } // imprimir_archivos

    /**
     * Elaborar indice JSON
     *
     * @return string Código JSON, texto para ser el contenido del archivo
     */
    protected function elaborar_indice_json() {
        if (count($this->indice) > 0) {
            $a = array();
            foreach ($this->indice as $nombre => $ruta) {
                $url = sprintf('%s/%s', self::SITIO_URL, $ruta);
                $a[] = "    { \"Nombre\":\"$nombre\", \"URL\":\"$url\" }";
            }
            return "[\n".implode(",\n", $a)."\n]\n";
        } else {
            return FALSE;
        }
    } // elaborar_indice_json

    /**
     * Imprimir índice JSON
     */
    protected function imprimir_indice() {
        $archivo_ruta = sprintf('%s/%s.json', $this->directorio, $this->directorio);
        $json         = $this->elaborar_indice_json();
        if (is_string($json)) {
            $this->crear_archivo($archivo_ruta, $json);
            echo " índice en {$archivo_ruta}";
        }
    } // imprimir_indice

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaJSONs: ";
        $this->validar();
        $this->recolector->agregar_publicaciones_en($this->publicaciones_directorio, $this);
        $this->crear_directorio($this->directorio);
        $this->imprimir_archivos();
        $this->imprimir_indice();
        echo "\n";
    } // imprimir

} // Clase ImprentaJSONs

?>
