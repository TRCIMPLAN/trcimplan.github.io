<?php
/**
 * Plataforma de Conocimiento - Páginas Autores Índice
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
 * Clase PaginasAutoresIndice
 */
class PaginasAutoresIndice extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    // public $cantidad_maxima;
    // protected $recolector;
    // protected $vinculos;
    // protected $he_concentrado;

    /**
     * Constructor
     *
     * @param mixed Instancia de RecolectorAutores
     */
    public function __construct(RecolectorAutores $recolector) {
        $this->recolector = $recolector;
    } // constructor

    /**
     * Autor Descripción HTML
     *
     * @param  mixed  Instancia de Autor
     * @return string Código HTML
     */
    public function autor_descripcion_html(Autor $autor) {
        $d = array();
        if (($autor->empresa != '') && ($autor->cargo != '')) {
            $d[] = "              <p class=\"autor-empresa-cargo\">";
            $d[] = "                <span class=\"autor-empresa\">{$autor->empresa}</span><br>";
            $d[] = "                <span class=\"autor-cargo\">{$autor->cargo}</span>";
            $d[] = "              </p>";
        } else {
            if ($autor->empresa != '') {
                $d[] = "              <p class=\"autor-empresa-cargo\"><span class=\"autor-empresa\">{$autor->empresa}</span></p>";
            }
            if ($autor->cargo != '') {
                $d[] = "              <p class=\"autor-empresa-cargo\"><span class=\"autor-cargo\">{$autor->cargo}</span></p>";
            }
        }
        if ($autor->semblanza != '') {
            $d[] = "              <p class=\"autor-semblanza\">{$autor->semblanza}</p>";
        }
        if (($autor->email != '') && ($autor->twitter != '')) {
            $d[] = "              <p class=\"autor-email-twitter\">";
            $d[] = "                <i class=\"fa fa-envelope\"></i> <a href=\"mailto:{$autor->email}\" target=\"_blank\">{$autor->email}</a><br>";
            $d[] = "                <i class=\"fa fa-twitter\"></i> <a href=\"https://twitter.com/{$autor->twitter}\" target=\"_blank\">@{$autor->twitter}</a>";
            $d[] = "              </p>";
        } else {
            if ($autor->email != '') {
                $d[] = "              <p class=\"autor-email-twitter\"><i class=\"fa fa-envelope\"></i> <a href=\"mailto:{$autor->email}\" target=\"_blank\">{$autor->email}</a></p>";
            }
            if ($autor->twitter != '') {
                $d[] = "              <p class=\"autor-email-twitter\"><i class=\"fa fa-twitter\"></i> <a href=\"https://twitter.com/{$autor->twitter}\" target=\"_blank\">@{$autor->twitter}</a></p>";
            }
        }
        return implode("\n", $d);
    } // autor_descripcion_html

    /**
     * Concentrar
     */
    protected function concentrar() {
        // Si ya se ha concentrado, no se hace nada
        if ($this->he_concentrado) {
            return;
        }
        // Cargar configuración de los autores
        $autores_config = new \Configuracion\AutoresConfig();
        // Iniciar vínculos
        $clase                         = \Configuracion\AutoresConfig::VINCULOS_INDICE;
        $this->vinculos                = new $clase();
        $this->vinculos->identificador = 'autores-indice';
        $this->vinculos->imagen_tamano = $autores_config->imagen_tamano;
        // Si se van a mostrar los autores NO definidos
        if ($autores_config->mostrar_no_definidos) {
            // Bucle por todos los autores encontrados
            foreach ($this->recolector->obtener_autores() as $nombre) {
                // Obtener la cantidad de publicaciones de este autor
                $this->recolector->filtrar_publicaciones_de_autor($nombre);
                $cantidad = $this->recolector->obtener_cantidad_de_publicaciones();
                // Obtener instancia de Autor
                $autor = $autores_config->obtener($nombre);
                // Si está definido en \Configuracion\AutoresConfig
                if ($autor instanceof Autor) {
                    // Sí está definido
                    $autor->en_raiz          = $this->en_raiz;
                    $autor->en_otro          = $this->en_otro;
                    $vinculo                 = new Vinculo($autor->titulo_nombre_completo(), $autor->url(), $autor->icono, \Configuracion\AutoresConfig::DIRECTORIO, $this->autor_descripcion_html($autor));
                    $vinculo->boton_etiqueta = "Todas sus publicaciones";
                    $this->vinculos->agregar($vinculo);
                } elseif ($autores_config->mostrar_no_definidos) {
                    // No está definido
                    $pagina  = sprintf('%s.html', Funciones::caracteres_para_web($nombre));
                    $vinculo = new Vinculo($nombre, $pagina, 'unknown');
                    $this->vinculos->agregar($vinculo);
                }
            }
        } else {
            // Sólo los autores configurados, bucle por ellos
            foreach ($autores_config->autores as $autor) {
                $autor->en_raiz = $this->en_raiz;
                $autor->en_otro = $this->en_otro;
                // Fitrar en el recolector, previendo que al no haber publicaciones la cantidad es cero
                try {
                    // Recolectar filtrando primero por apodo, luego por 'titulo nombre_completo'
                    if ($autor->apodo != '') {
                        try {
                            $this->recolector->filtrar_publicaciones_de_autor($autor->apodo);
                        } catch (RecolectorExceptionVacio $e) {
                            $this->recolector->filtrar_publicaciones_de_autor($autor->titulo_nombre_completo());
                        }
                    } else {
                        $this->recolector->filtrar_publicaciones_de_autor($autor->titulo_nombre_completo());
                    }
                    // Obtener la cantidad de publicaciones de este autor
                    $cantidad = $this->recolector->obtener_cantidad_de_publicaciones();
                } catch (RecolectorExceptionVacio $e) {
                    $cantidad = 0;
                }
                // Si tiene publicaciones
                if ($cantidad > 0) {
                    $vinculo = new Vinculo($autor->titulo_nombre_completo(), $autor->url(), $autor->icono, \Configuracion\AutoresConfig::DIRECTORIO, $this->autor_descripcion_html($autor));
                    $vinculo->boton_etiqueta = "Todas sus publicaciones";
                } else {
                    // No tiene publicaciones, sólo se ponen los datos del autor sin enlace a su página
                    $vinculo = new Vinculo($autor->titulo_nombre_completo(), '', $autor->icono, \Configuracion\AutoresConfig::DIRECTORIO, $this->autor_descripcion_html($autor));
                }
                // Agregar vínculo
                $this->vinculos->agregar($vinculo);
            }
        }
        // Levantar la bandera
        $this->he_concentrado = true;
    } // concentrar

} // Clase PaginasAutoresIndice

?>
