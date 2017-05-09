<?php
/**
 * Plataforma de Conocimiento - Plantilla
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
 * Clase Plantilla
 */
class Plantilla extends \Configuracion\PlantillaConfig {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $autor;
    // public $mensaje_oculto;
    // public $pie;
    // protected $google_analytics;
    // protected $google_site_verification;
    // protected $favicons;
    // protected $vinculos_css;
    // protected $vinculos_js;
    public $titulo;                         // Título de la página
    public $descripcion;                    // Descripción del sitio o la página
    public $claves;                         // Claves que ayuden a los buscadores
    public $directorio;                     // Directorio donde se guardará el archivo HTML
    public $archivo_ruta;                   // Ruta desde la raiz a la pagina HTML
    public $imagen_previa_ruta;             // Ruta desde la raiz a la imagen previa
    public $icono;                          // Icono de Font Awsome
    public $navegacion;                     // Instancia de \Base\Navegacion
    public $contenido            = array(); // Texto o arreglo, código HTML con el contenido
    public $mapa_inferior;                  // Instancia de \Base\MapaInferior
    public $javascript           = array(); // Arreglo que acumula el código Javascript a poner al final de la página
    public $contenido_en_renglon = TRUE;    // Encierra el contenido en renglón y cuerpo.

    /**
     * Incorporar Publicacion
     *
     * @param  mixed   Instancia de Publicacion
     * @return boolean Verdadero si se integró, falso si se omitió por no tener definida la propiedad archivo
     */
    public function incorporar_publicacion($publicacion) {
        // Validar que sea una Publicacion
        if (!is_object($publicacion) || !($publicacion instanceof Publicacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: No es instancia de Publicacion.");
        }
        // Omitir cuando la propiedad archivo NO está definida
        if (($publicacion->archivo == '') || ($publicacion->directorio == '')) {
            return FALSE;
        }
        // Validar Navegación
        if (!is_object($this->navegacion) || !($this->navegacion instanceof Navegacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: La propiedad navegacion no es instancia de Navegacion.");
        }
        // Inicializar el código JavaScript, porque puede quedar algo de publicaciones anteriores
        $this->javascript   = array();
        // Esta publicación ocupará la página completa
        $completo           = new Completo($publicacion);
        $this->contenido    = $completo->html();
        $this->javascript[] = $completo->javascript();
        // En navegacion, para que el menú indique la opción activa
        $this->navegacion->opcion_activa = $publicacion->nombre_menu;
        // Definir las demás propiedades
        $this->titulo       = $publicacion->nombre;
        if (is_array($publicacion->autor)) {
            $this->autor = implode(', ', $publicacion->autor);
        } else {
            $this->autor = $publicacion->autor;
        }
        $this->descripcion  = $publicacion->descripcion;
        $this->claves       = $publicacion->claves;
        $this->directorio   = $publicacion->directorio;
        $this->archivo_ruta = "{$publicacion->directorio}/{$publicacion->archivo}.html";
        if ($publicacion->imagen_previa != '') {
            $this->imagen_previa_ruta = "{$publicacion->directorio}/{$publicacion->imagen_previa}";
        } else {
            $this->imagen_previa_ruta = '';
        }
        $this->icono        = $publicacion->icono;
        // Entregar verdadero
        return TRUE;
    } // incorporar_publicacion

    /**
     * Cabecera
     *
     * @return string Código HTML
     */
    protected function cabecera() {
        // Título
        if (($this->titulo == '') || ($this->titulo == $this->sitio_titulo)) {
            $titulo = $this->sitio_titulo;
        } else {
            $titulo = "{$this->titulo} - {$this->sitio_titulo}";
        }
        // Definir título y descripción con carecteres validos para usarse como valor en un tag
        $caracteres_buscar      = array('"', '<', '>');
        $caracteres_reemplazar  = array("'", '-', '-');
        $titulo_para_valor      = str_replace($caracteres_buscar, $caracteres_reemplazar, $titulo);
        $descripcion_para_valor = str_replace($caracteres_buscar, $caracteres_reemplazar, $this->descripcion);
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<head>';
        $a[] = '  <meta charset="utf-8">';
        if ($this->mensaje_oculto != '') {
            $a[] = $this->mensaje_oculto;
        }
        $a[] = '  <meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $a[] = '  <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        if ($this->descripcion != '') {
            $a[] = "  <meta name=\"description\" content=\"$descripcion_para_valor\">";
        }
        if ($this->autor != '') {
            $a[] = "  <meta name=\"author\" content=\"{$this->autor}\">";
        }
        if ($this->claves != '') {
            $a[] = "  <meta name=\"keywords\" content=\"{$this->claves}\">";
        }
        if ($this->para_compartir) {
            $a[] = "  <meta name=\"twitter:card\" content=\"summary\">";
            $a[] = "  <meta name=\"twitter:title\" content=\"$titulo_para_valor\">";
            $a[] = "  <meta name=\"twitter:description\" content=\"$descripcion_para_valor\">";
            if ($this->imagen_previa_ruta != '') {
                $a[] = sprintf('  <meta name="twitter:image" content="%s/%s">', $this->sitio_url, $this->imagen_previa_ruta);
            }
            $a[] = sprintf('  <meta name="twitter:url" content="%s/%s">', $this->sitio_url, $this->archivo_ruta);
            $a[] = "  <meta name=\"og:title\" content=\"$titulo_para_valor\">";
            $a[] = "  <meta name=\"og:description\" content=\"$descripcion_para_valor\">";
            if ($this->imagen_previa_ruta != '') {
                $a[] = sprintf('  <meta name="og:image" content="%s/%s">', $this->sitio_url, $this->imagen_previa_ruta);
            }
            $a[] = sprintf('  <meta name="og:url" content="%s/%s">', $this->sitio_url, $this->archivo_ruta);
        }
        if ($this->google_site_verification != '') {
            $a[] = "  {$this->google_site_verification}";
        }
        $a[] = "  <title>$titulo</title>";
        if ($this->en_raiz) {
            if ($this->favicon != '') {
                $a[] = "  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{$this->favicon}\">";
            }
            if (is_array($this->favicons) && (count($this->favicons > 0))) {
                foreach ($this->favicons as $fi) {
                    if (($fi['ruta'] != '') && ($fi['rel'] != '') && ($fi['size'] != '')) {
                        $a[] = sprintf('  <link rel="%s" href="%s" sizes="%s">', $fi['rel'], $fi['ruta'], $fi['size']);
                    } elseif (($fi['ruta'] != '') && ($fi['rel'] != '')) {
                        $a[] = sprintf('  <link rel="%s" href="%s">', $fi['rel'], $fi['ruta']);
                    }
                }
            }
            if ($this->rss != '') {
                $a[] = "  <link rel=\"alternate\" type=\"application/rss+xml\" href=\"{$this->rss}\" title=\"{$this->sitio_titulo}\">";
            }
            if (is_array($this->vinculos_css) && (count($this->vinculos_css) > 0)) {
                foreach ($this->vinculos_css as $v) {
                    $a[] = sprintf('  <link rel="stylesheet" type="text/css" href="%s">', $v);
                }
            }
            if ($this->propio_css != '') {
                $a[] = "  <link rel=\"stylesheet\" type=\"text/css\" href=\"{$this->propio_css}\">";
            }
        } else {
            if ($this->favicon != '') {
                $a[] = "  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../{$this->favicon}\">";
            }
            if (is_array($this->favicons) && (count($this->favicons > 0))) {
                foreach ($this->favicons as $fi) {
                    if (($fi['ruta'] != '') && ($fi['rel'] != '') && ($fi['size'] != '')) {
                        $a[] = sprintf('  <link rel="%s" href="../%s" sizes="%s">', $fi['rel'], $fi['ruta'], $fi['size']);
                    } elseif (($fi['ruta'] != '') && ($fi['rel'] != '')) {
                        $a[] = sprintf('  <link rel="%s" href="../%s">', $fi['rel'], $fi['ruta']);
                    }
                }
            }
            if ($this->rss != '') {
                $a[] = "  <link rel=\"alternate\" type=\"application/rss+xml\" href=\"../{$this->rss}\" title=\"{$this->sitio_titulo}\">";
            }
            if (is_array($this->vinculos_css) && (count($this->vinculos_css) > 0)) {
                foreach ($this->vinculos_css as $v) {
                    if (preg_match('/^(http|https):\/\//', $v) === 1) {
                        $a[] = sprintf('  <link rel="stylesheet" type="text/css" href="%s">', $v);
                    } else {
                        $a[] = sprintf('  <link rel="stylesheet" type="text/css" href="../%s">', $v);
                    }
                }
            }
            if ($this->propio_css != '') {
                $a[] = "  <link rel=\"stylesheet\" type=\"text/css\" href=\"../{$this->propio_css}\">";
            }
        }
        $a[] = '  <!-- SOPORTE PARA IE -->';
        $a[] = '  <!--[if lt IE 9]>';
        $a[] = '  <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
        $a[] = '  <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>';
        $a[] = '  <![endif]-->';
        $a[] = '</head>';
        // Entregar
        return implode("\n", $a);
    } // cabecera

    /**
     * Scripts
     *
     * @return string Código HTML
     */
    protected function scripts() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular javascript global
        $a[] = '<!-- Javascript global inicia -->';
        if ($this->en_raiz) {
            if (is_array($this->vinculos_js) && (count($this->vinculos_js) > 0)) {
                foreach ($this->vinculos_js as $v) {
                    $a[] = sprintf('<script type="text/javascript" src="%s"></script>', $v);
                }
            }
        } else {
            if (is_array($this->vinculos_js) && (count($this->vinculos_js) > 0)) {
                foreach ($this->vinculos_js as $v) {
                    if (preg_match('/^(http|https):\/\//', $v) === 1) {
                        $a[] = sprintf('<script type="text/javascript" src="%s"></script>', $v);
                    } else {
                        $a[] = sprintf('<script type="text/javascript" src="../%s"></script>', $v);
                    }
                }
            }
        }
        $a[] = '<!-- Javascript global termina -->';
        // Acumular javascript de la página
        $a[] = '<!-- Javascript inicia -->';
        if (is_array($this->javascript) && (count($this->javascript) > 0)) {
            $b = array();
            foreach ($this->javascript as $js) {
                if (trim($js) != '') {
                    if (substr(trim($js), 0, 7) == '<script') {
                        $b[] = $js;
                    } else {
                        $b[] = "<script>\n$js\n</script>";
                    }
                }
            }
            if (count($b) > 0) {
                $a[] = implode("\n", $b);
            }
        } elseif (is_string($this->javascript) && (trim($this->javascript) != '')) {
            if (substr(trim($this->javascript), 0, 7) == '<script') {
                $a[] = $this->javascript;
            } else {
                $a[] = "<script>\n{$this->javascript}\n</script>";
            }
        }
        $a[] = '<!-- Javascript termina -->';
        // Google Analytics
        if (is_string($this->google_analytics) && ($this->google_analytics != '')) {
            $a[] = "<!-- Javascript Google Analytics -->\n{$this->google_analytics}";
        }
        // Entregar
        return implode("\n", $a);
    } // scripts

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_object($this->navegacion)) {
            throw new \Exception("Error en Plantilla, html: La propiedad navegacion no es una instancia.");
        }
        if (!($this->navegacion instanceof Navegacion)) {
            throw new \Exception("Error en Plantilla, html: La propiedad navegacion no es instancia de Navegacion.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<!DOCTYPE html>';
        $a[] = '<html lang="es">';
        $a[] = $this->cabecera();
        $a[] = '<body>';
        $a[] = '<div id="wrapper">';
        $a[] = $this->navegacion->html();
        // Contenido inicia
        $a[] = '  <div id="page-wrapper">';
        if ($this->contenido_en_renglon) {
            $a[] = '    <div class="cuerpo">';
        }
        if (is_string($this->contenido) && (trim($this->contenido) != '')) {
            $a[] = $this->contenido;
        } elseif (is_array($this->contenido) && (count($this->contenido) > 0)) {
            $a[] = implode("\n", $this->contenido);
        } else {
            $a[] = "      <b>No hay contenido para esta página.</b>";
        }
        if ($this->contenido_en_renglon) {
            $a[] = '    </div>'; // cuerpo
        }
        if (is_object($this->mapa_inferior) && ($this->mapa_inferior instanceof MapaInferior)) {
            $a[] = $this->mapa_inferior->html();
        }
        $a[] = '  </div>'; // page-wrapper
        // Contenido termina
        $a[] = '</div>'; // wrapper
        if (is_string($this->pie) && (trim($this->pie) != '')) {
            $a[] = '<div id="pie">';
            $a[] = $this->pie;
            $a[] = '</div>';
        }
        $a[] = $this->scripts();
        $a[] = '</body>';
        $a[] = '</html>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

} // Plantilla

?>
