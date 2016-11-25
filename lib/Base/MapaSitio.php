<?php
/**
 * Plataforma de Conocimiento - Mapa del Sitio
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
 * Clase MapaSitio
 *
 * Basado en http://enarion.net/tools/phpsitemapng/
 */
class MapaSitio extends \Configuracion\MapaSitioConfig {

    // public $xml_encoding;
    // public $max_urls;
    // public $base_url;
    // public $priority_min;
    // public $priority_max;
    // public $priority_step;
    // public $archivo;
    public $urls         = array();
    public $change_freqs = array('always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never');

    /**
     * Agregar URL
     *
     * @param string Ruta relativa a la raiz del sitio
     * @param string Fecha de modificación de la forma YYYY-MM-DD
     * @param string La frecuencia de cambio
     * @param string La prioridad respecto a los demás
     */
    public function agregar_url($in_url, $lastmod=null, $in_changefreq=null, $in_priority=null) {
        // Validar límite de URLs
        if (count($this->urls) >= $this->max_urls) {
            throw new \Exception("Error en MapaSitio, agregar_url: Se ha alcanzado el máximo de {$this->maxURLs} URLs.");
        }
        // Si es un URL absoluto, ajeno a este sitio, se omite
        if ((strpos($in_url, 'http://') === 0) && !(strpos($in_url, $this->base_url) === 0)) {
            return;
        }
        // URL
        if ((strpos($in_url, 'http://') === 0) || (strpos($in_url, 'https://') === 0)) {
            $url = $in_url;
        } elseif (strpos($in_url, '/') === 0) {
            $url = $this->base_url.$in_url;
        } else {
            $url = $this->base_url.'/'.$in_url;
        }
        // Change Freq
        if (!is_null($in_changefreq) && in_array($in_changefreq, $this->change_freqs)) {
            $change_freq = $in_changefreq;
        }
        // Priority
        if (!is_null($in_priority) && $in_priority != '') {
            $p = (float) $in_priority;
            if (($p >= $this->priority_min) && ($p <= $this->priorityMax)) {
                $tmp = floor($p / $this->priority_step);
                $tmp = $p - $tmp * $this->priority_step;
                $priority -= $tmp;
            }
        }
        // Acumular URL
        $this->urls[] = array(
            'url'        => $url,
            'lastmod'    => $lastmod,
            'changefreq' => $change_freq,
            'priority'   => $priority);
    } // agregar_url

    /**
     * Escapes a string to be used as XML cdata
     *
     * @param  string Texto a cambiar
     * @return string Texto listo para usarse en XML
     */
    protected function xml_escape($str) {
        static $trans;
        if (!isset($trans)) {
            $trans = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES);
            foreach ($trans as $key => $value) {
                $trans[$key] = '&#'.ord($key).';';
            }
            $trans[chr(38)] = '&'; // dont translate the '&' in case it is part of &xxx;
        }
        return preg_replace("/&(?![A-Za-z]{0,4}\w{2,3};|#[0-9]{2,4};)/","&#38;" , strtr($str, $trans));
    } // xml_escape

    /**
     * XML
     *
     * @return string Código XML
     */
    public function xml() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = sprintf('<?xml version="1.0" encoding="%s"?>', $this->xml_encoding);
        $a[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach ($this->urls as $url) {
            $a[] = '  <url>';
            $a[] = sprintf('    <loc>%s</loc>', $this->xml_escape($url['url']));
            if (isset($url['lastmod'])) {
                if (is_numeric($url['lastmod'])) {
                    $a[] = sprintf('    <lastmod>%s</lastmod>', date('Y-m-d', $url['lastmod']));
                } elseif (is_string($url['lastmod'])) {
                    // Elaborar fecha de última modificación
                    $t = strtotime($url['lastmod']);
                    if ($t === false) {
                        // Fecha mal escrita, se usará 1980-01-01
                        $a[] = '    <lastmod>1980-01-01</lastmod>';
                    } else {
                        // Sí se interpretó bien
                        $f   = getdate($t);
                        $ano = $f['year'];
                        $mes = $f['mon'];
                        $dia = $f['mday'];
                        $a[] = sprintf('    <lastmod>%s</lastmod>', date('Y-m-d', mktime(0, 0, 0, $mes, $dia, $ano)));
                    }
                }
            }
            if (isset($url['changefreq'])) {
                $a[] = sprintf('    <changefreq>%s</changefreq>', $this->xml_escape($url['changefreq']));
            }
            if (isset($url['priority'])) {
                $a[] = sprintf('    <priority>%s</priority>', $this->xml_escape($url['priority']));
            }
            $a[] = '  </url>';
        }
        $a[] = '</urlset>';
        // Entregar
        return implode("\n", $a);
    } // xml

} // Clase MapaSitio

?>
