<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadConcentracionDeParticulasSuspendidasTotales
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

namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadConcentracionDeParticulasSuspendidasTotales
 */
class SustentabilidadConcentracionDeParticulasSuspendidasTotales extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Concentración de Partículas Suspendidas Totales en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2017-04-04T09:26:11';
        // El nombre del archivo a crear
        $this->archivo                   = 'sustentabilidad-concentracion-de-particulas-suspendidas-totales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Medición de la calidad del aire por la medición de las partículas suspendidas en microgramos por metro cúbico. La Norma Oficial Mexicana de Salud 025 indica que se está dentro de la norma por debajo de 250 ug por m3.';
        $this->claves                    = 'IMPLAN, Torreón, Recursos Naturales';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Recursos Naturales');
        $this->fuentes                   = array('DIF Revolución', 'Esc. Secundaria General No. 2', 'Esc. Primaria Emiliano Zapata', 'Centro Cultural José R. Mijares', 'Esc. Secundaria General No. 3', 'Cap. Divina Providencia', 'Esc. Secundaria Técnica No. 83');
        $this->regiones                  = array('Torreón');
        // Inicializar las lengüetas
        $this->lenguetas                 = new \Base\Lenguetas('smi-indicador');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        return <<<FINAL
      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>12/01/2016</td>
            <td>152</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>12/01/2016</td>
            <td>137</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>12/01/2016</td>
            <td>178</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>13/01/2016</td>
            <td>196</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>13/01/2016</td>
            <td>172</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>13/01/2016</td>
            <td>205</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>13/01/2016</td>
            <td>248</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>19/01/2016</td>
            <td>212</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>19/01/2016</td>
            <td>222</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>19/01/2016</td>
            <td>377</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>20/01/2016</td>
            <td>254</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>20/01/2016</td>
            <td>193</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>20/01/2016</td>
            <td>296</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>20/01/2016</td>
            <td>390</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>26/01/2016</td>
            <td>171</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>26/01/2016</td>
            <td>208</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>26/01/2016</td>
            <td>230</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>27/01/2016</td>
            <td>88</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>27/01/2016</td>
            <td>91</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>27/01/2016</td>
            <td>83</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>27/01/2016</td>
            <td>129</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>02/02/2016</td>
            <td>109</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>02/02/2016</td>
            <td>106</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>02/02/2016</td>
            <td>122</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>03/02/2016</td>
            <td>136</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>03/02/2016</td>
            <td>144</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>03/02/2016</td>
            <td>154</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>03/02/2016</td>
            <td>172</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>09/02/2016</td>
            <td>165</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>09/02/2016</td>
            <td>171</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>09/02/2016</td>
            <td>230</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>10/02/2016</td>
            <td>213</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>10/02/2016</td>
            <td>229</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>10/02/2016</td>
            <td>218</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>10/02/2016</td>
            <td>307</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>16/02/2016</td>
            <td>268</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>16/02/2016</td>
            <td>240</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>16/02/2016</td>
            <td>398</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>17/02/2016</td>
            <td>215</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>17/02/2016</td>
            <td>199</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>17/02/2016</td>
            <td>216</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>17/02/2016</td>
            <td>309</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>23/02/2016</td>
            <td>191</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>23/02/2016</td>
            <td>236</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>23/02/2016</td>
            <td>266</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>24/02/2016</td>
            <td>204</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>24/02/2016</td>
            <td>114</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>24/02/2016</td>
            <td>224</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>24/02/2016</td>
            <td>325</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>01/03/2016</td>
            <td>133</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>01/03/2016</td>
            <td>171</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>01/03/2016</td>
            <td>246</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>02/03/2016</td>
            <td>183</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>02/03/2016</td>
            <td>174</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>02/03/2016</td>
            <td>202</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>02/03/2016</td>
            <td>322</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>08/03/2016</td>
            <td>307</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>08/03/2016</td>
            <td>190</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>08/03/2016</td>
            <td>393</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>09/03/2016</td>
            <td>55</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>09/03/2016</td>
            <td>32</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>09/03/2016</td>
            <td>50</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>09/03/2016</td>
            <td>67</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>12/03/2016</td>
            <td>172</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>12/03/2016</td>
            <td>185</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>12/03/2016</td>
            <td>236</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>15/03/2016</td>
            <td>206</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>15/03/2016</td>
            <td>158</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>15/03/2016</td>
            <td>289</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>16/03/2016</td>
            <td>193</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>16/03/2016</td>
            <td>142</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>16/03/2016</td>
            <td>215</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>16/03/2016</td>
            <td>315</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>19/03/2016</td>
            <td>236</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>19/03/2016</td>
            <td>236</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>19/03/2016</td>
            <td>354</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>26/03/2016</td>
            <td>92</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>26/03/2016</td>
            <td>96</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>26/03/2016</td>
            <td>136</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>29/03/2016</td>
            <td>121</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>29/03/2016</td>
            <td>89</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>29/03/2016</td>
            <td>164</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>30/03/2016</td>
            <td>107</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>30/03/2016</td>
            <td>117</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>30/03/2016</td>
            <td>140</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>30/03/2016</td>
            <td>169</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>05/04/2016</td>
            <td>164</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>05/04/2016</td>
            <td>161</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>05/04/2016</td>
            <td>213</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>06/04/2016</td>
            <td>218</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>06/04/2016</td>
            <td>248</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>06/04/2016</td>
            <td>246</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>06/04/2016</td>
            <td>292</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>13/04/2016</td>
            <td>149</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>13/04/2016</td>
            <td>234</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>13/04/2016</td>
            <td>169</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>13/04/2016</td>
            <td>209</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>20/04/2016</td>
            <td>234</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>20/04/2016</td>
            <td>222</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>20/04/2016</td>
            <td>262</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>20/04/2016</td>
            <td>301</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>27/04/2016</td>
            <td>167</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>27/04/2016</td>
            <td>152</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>27/04/2016</td>
            <td>160</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>27/04/2016</td>
            <td>298</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>03/05/2016</td>
            <td>133</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>03/05/2016</td>
            <td>158</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>03/05/2016</td>
            <td>163</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>04/05/2016</td>
            <td>132</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>04/05/2016</td>
            <td>131</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>04/05/2016</td>
            <td>130</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>04/05/2016</td>
            <td>213</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>10/05/2016</td>
            <td>141</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>10/05/2016</td>
            <td>148</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>10/05/2016</td>
            <td>188</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>11/05/2016</td>
            <td>132</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>11/05/2016</td>
            <td>119</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>11/05/2016</td>
            <td>135</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>11/05/2016</td>
            <td>191</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>17/05/2016</td>
            <td>116</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>17/05/2016</td>
            <td>97</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>17/05/2016</td>
            <td>134</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>18/05/2016</td>
            <td>148</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>18/05/2016</td>
            <td>134</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>18/05/2016</td>
            <td>141</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>18/05/2016</td>
            <td>195</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>24/05/2016</td>
            <td>156</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>24/05/2016</td>
            <td>151</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>24/05/2016</td>
            <td>199</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>25/05/2016</td>
            <td>287</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>25/05/2016</td>
            <td>274</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>25/05/2016</td>
            <td>331</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>25/05/2016</td>
            <td>425</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2016</td>
            <td>162</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2016</td>
            <td>167</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2016</td>
            <td>204</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>01/06/2016</td>
            <td>164</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>01/06/2016</td>
            <td>153</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>01/06/2016</td>
            <td>210</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>01/06/2016</td>
            <td>289</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>07/06/2016</td>
            <td>126</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>07/06/2016</td>
            <td>139</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>07/06/2016</td>
            <td>196</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>08/06/2016</td>
            <td>135</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>08/06/2016</td>
            <td>140</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>08/06/2016</td>
            <td>122</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>08/06/2016</td>
            <td>176</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>14/06/2016</td>
            <td>129</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>14/06/2016</td>
            <td>128</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>14/06/2016</td>
            <td>172</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>15/06/2016</td>
            <td>186</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>15/06/2016</td>
            <td>197</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>15/06/2016</td>
            <td>227</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>15/06/2016</td>
            <td>285</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>21/06/2016</td>
            <td>96</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>21/06/2016</td>
            <td>71</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>21/06/2016</td>
            <td>130</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>22/06/2016</td>
            <td>101</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>22/06/2016</td>
            <td>85</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>22/06/2016</td>
            <td>98</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>22/06/2016</td>
            <td>167</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>28/06/2016</td>
            <td>87</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>28/06/2016</td>
            <td>83</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>28/06/2016</td>
            <td>91</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>29/06/2016</td>
            <td>111</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>29/06/2016</td>
            <td>133</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>29/06/2016</td>
            <td>110</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>29/06/2016</td>
            <td>143</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>05/07/2016</td>
            <td>110</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>05/07/2016</td>
            <td>91</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>05/07/2016</td>
            <td>130</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>06/07/2016</td>
            <td>123</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>06/07/2016</td>
            <td>107</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>06/07/2016</td>
            <td>118</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>06/07/2016</td>
            <td>161</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>12/07/2016</td>
            <td>141</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>12/07/2016</td>
            <td>148</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>12/07/2016</td>
            <td>167</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>13/07/2016</td>
            <td>88</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>13/07/2016</td>
            <td>63</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>13/07/2016</td>
            <td>80</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>13/07/2016</td>
            <td>111</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>19/07/2016</td>
            <td>164</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>19/07/2016</td>
            <td>129</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>19/07/2016</td>
            <td>156</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>20/07/2016</td>
            <td>101</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>20/07/2016</td>
            <td>70</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>20/07/2016</td>
            <td>91</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>20/07/2016</td>
            <td>157</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>26/07/2016</td>
            <td>117</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>26/07/2016</td>
            <td>125</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>26/07/2016</td>
            <td>153</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>27/07/2016</td>
            <td>148</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>27/07/2016</td>
            <td>119</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>27/07/2016</td>
            <td>124</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>27/07/2016</td>
            <td>162</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>02/08/2016</td>
            <td>114</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>02/08/2016</td>
            <td>129</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>02/08/2016</td>
            <td>123</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>03/08/2016</td>
            <td>138</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>03/08/2016</td>
            <td>113</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>03/08/2016</td>
            <td>116</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>03/08/2016</td>
            <td>151</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>09/08/2016</td>
            <td>73</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>09/08/2016</td>
            <td>84</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>09/08/2016</td>
            <td>71</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>10/08/2016</td>
            <td>107</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>10/08/2016</td>
            <td>91</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>10/08/2016</td>
            <td>112</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>10/08/2016</td>
            <td>123</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>16/08/2016</td>
            <td>87</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>16/08/2016</td>
            <td>106</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>16/08/2016</td>
            <td>83</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>17/08/2016</td>
            <td>89</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>17/08/2016</td>
            <td>84</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>17/08/2016</td>
            <td>74</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>17/08/2016</td>
            <td>102</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>23/08/2016</td>
            <td>114</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>23/08/2016</td>
            <td>114</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>23/08/2016</td>
            <td>153</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>24/08/2016</td>
            <td>79</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>24/08/2016</td>
            <td>77</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>24/08/2016</td>
            <td>98</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>24/08/2016</td>
            <td>108</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>06/09/2016</td>
            <td>103</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>06/09/2016</td>
            <td>116</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>06/09/2016</td>
            <td>116</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>07/09/2016</td>
            <td>134</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>07/09/2016</td>
            <td>132</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>07/09/2016</td>
            <td>147</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>07/09/2016</td>
            <td>203</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>13/09/2016</td>
            <td>147</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>13/09/2016</td>
            <td>140</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>13/09/2016</td>
            <td>167</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>14/09/2016</td>
            <td>144</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>14/09/2016</td>
            <td>102</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>14/09/2016</td>
            <td>146</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>14/09/2016</td>
            <td>220</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>20/09/2016</td>
            <td>108</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>20/09/2016</td>
            <td>127</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>20/09/2016</td>
            <td>133</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>21/09/2016</td>
            <td>127</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>21/09/2016</td>
            <td>118</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>21/09/2016</td>
            <td>112</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>21/09/2016</td>
            <td>193</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>27/09/2016</td>
            <td>97</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>27/09/2016</td>
            <td>138</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>27/09/2016</td>
            <td>97</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>28/09/2016</td>
            <td>147</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>28/09/2016</td>
            <td>159</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>28/09/2016</td>
            <td>169</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>28/09/2016</td>
            <td>214</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>04/10/2016</td>
            <td>161</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>04/10/2016</td>
            <td>140</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>04/10/2016</td>
            <td>184</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>05/10/2016</td>
            <td>203</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>05/10/2016</td>
            <td>167</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>05/10/2016</td>
            <td>248</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>05/10/2016</td>
            <td>306</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>11/10/2016</td>
            <td>161</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>11/10/2016</td>
            <td>141</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>11/10/2016</td>
            <td>300</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>12/10/2016</td>
            <td>216</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>12/10/2016</td>
            <td>209</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>12/10/2016</td>
            <td>240</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>12/10/2016</td>
            <td>313</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>18/10/2016</td>
            <td>229</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>18/10/2016</td>
            <td>223</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>18/10/2016</td>
            <td>271</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>19/10/2016</td>
            <td>193</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>19/10/2016</td>
            <td>204</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>19/10/2016</td>
            <td>236</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>19/10/2016</td>
            <td>227</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>25/10/2016</td>
            <td>124</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>25/10/2016</td>
            <td>129</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>25/10/2016</td>
            <td>141</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>26/10/2016</td>
            <td>162</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>26/10/2016</td>
            <td>139</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>26/10/2016</td>
            <td>130</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>26/10/2016</td>
            <td>213</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>01/11/2016</td>
            <td>215</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>01/11/2016</td>
            <td>203</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>01/11/2016</td>
            <td>293</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>02/11/2016</td>
            <td>226</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>02/11/2016</td>
            <td>204</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>02/11/2016</td>
            <td>264</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>02/11/2016</td>
            <td>293</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>08/11/2016</td>
            <td>129</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>08/11/2016</td>
            <td>141</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>08/11/2016</td>
            <td>137</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>09/11/2016</td>
            <td>77</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>09/11/2016</td>
            <td>58</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>09/11/2016</td>
            <td>70</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>09/11/2016</td>
            <td>97</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>15/11/2016</td>
            <td>216</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>15/11/2016</td>
            <td>140</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>15/11/2016</td>
            <td>329</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>16/11/2016</td>
            <td>206</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>16/11/2016</td>
            <td>258</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>22/11/2016</td>
            <td>187</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>22/11/2016</td>
            <td>159</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>22/11/2016</td>
            <td>213</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>23/11/2016</td>
            <td>185</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>23/11/2016</td>
            <td>169</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>23/11/2016</td>
            <td>201</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>29/11/2016</td>
            <td>154</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>29/11/2016</td>
            <td>137</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>29/11/2016</td>
            <td>251</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2016</td>
            <td>259</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2016</td>
            <td>206</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2016</td>
            <td>296</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2016</td>
            <td>341</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>06/12/2016</td>
            <td>267</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>07/12/2016</td>
            <td>277</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>07/12/2016</td>
            <td>206</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>07/12/2016</td>
            <td>261</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>07/12/2016</td>
            <td>220</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>07/12/2016</td>
            <td>321</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>07/12/2016</td>
            <td>327</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>13/12/2016</td>
            <td>311</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>13/12/2016</td>
            <td>204</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>13/12/2016</td>
            <td>477</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>14/12/2016</td>
            <td>374</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>14/12/2016</td>
            <td>261</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>14/12/2016</td>
            <td>503</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>14/12/2016</td>
            <td>477</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
          <tr>
            <td>20/12/2016</td>
            <td>342</td>
            <td>Esc. Primaria Emiliano Zapata</td>
            <td></td>
          </tr>
          <tr>
            <td>21/12/2016</td>
            <td>324</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>21/12/2016</td>
            <td>245</td>
            <td>Cap. Divina Providencia</td>
            <td></td>
          </tr>
          <tr>
            <td>21/12/2016</td>
            <td>306</td>
            <td>Esc. Secundaria General No. 2</td>
            <td></td>
          </tr>
          <tr>
            <td>21/12/2016</td>
            <td>241</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>21/12/2016</td>
            <td>227</td>
            <td>Esc. Secundaria General No. 3</td>
            <td></td>
          </tr>
          <tr>
            <td>21/12/2016</td>
            <td>371</td>
            <td>Esc. Secundaria Técnica No. 83</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>El municipio de Torreón cuenta con 9 equipos manuales y una estación automática para medir la calidad del aire en Partículas Suspendidas Totales (PST) y Partículas Menores a 10 micras (PM10).</li>
<li>Se ajustaron las fuentes para separar los datos por estaciones de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
</ul>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Esc. Secundaria General No. 2</h3>
      <div id="graficaDatosEscSecundariaGeneralNo2" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>El municipio de Torreón cuenta con 9 equipos manuales y una estación automática para medir la calidad del aire en Partículas Suspendidas Totales (PST) y Partículas Menores a 10 micras (PM10).</li>
<li>Se ajustaron las fuentes para separar los datos por estaciones de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 1 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_1_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEscSecundariaGeneralNo2 === 'undefined') {
    vargraficaDatosEscSecundariaGeneralNo2 = Morris.Line({
      element: 'graficaDatosEscSecundariaGeneralNo2',
      data: [{ fecha: '2016-01-12', dato: 152 },{ fecha: '2016-01-19', dato: 212 },{ fecha: '2016-01-26', dato: 171 },{ fecha: '2016-02-02', dato: 109 },{ fecha: '2016-02-09', dato: 165 },{ fecha: '2016-02-16', dato: 268 },{ fecha: '2016-02-23', dato: 191 },{ fecha: '2016-03-01', dato: 133 },{ fecha: '2016-03-08', dato: 307 },{ fecha: '2016-03-12', dato: 172 },{ fecha: '2016-03-15', dato: 206 },{ fecha: '2016-03-19', dato: 236 },{ fecha: '2016-03-26', dato: 92 },{ fecha: '2016-03-29', dato: 121 },{ fecha: '2016-04-05', dato: 164 },{ fecha: '2016-05-03', dato: 133 },{ fecha: '2016-05-10', dato: 141 },{ fecha: '2016-05-17', dato: 116 },{ fecha: '2016-05-24', dato: 156 },{ fecha: '2016-05-31', dato: 162 },{ fecha: '2016-06-07', dato: 126 },{ fecha: '2016-06-14', dato: 129 },{ fecha: '2016-06-21', dato: 96 },{ fecha: '2016-06-28', dato: 87 },{ fecha: '2016-07-05', dato: 110 },{ fecha: '2016-07-12', dato: 141 },{ fecha: '2016-07-19', dato: 164 },{ fecha: '2016-07-26', dato: 117 },{ fecha: '2016-08-02', dato: 114 },{ fecha: '2016-08-09', dato: 73 },{ fecha: '2016-08-16', dato: 87 },{ fecha: '2016-08-23', dato: 114 },{ fecha: '2016-09-06', dato: 103 },{ fecha: '2016-09-13', dato: 147 },{ fecha: '2016-09-20', dato: 108 },{ fecha: '2016-09-27', dato: 97 },{ fecha: '2016-10-04', dato: 161 },{ fecha: '2016-10-11', dato: 161 },{ fecha: '2016-10-18', dato: 229 },{ fecha: '2016-10-25', dato: 124 },{ fecha: '2016-11-01', dato: 215 },{ fecha: '2016-11-08', dato: 129 },{ fecha: '2016-11-15', dato: 216 },{ fecha: '2016-11-22', dato: 187 },{ fecha: '2016-11-29', dato: 154 },{ fecha: '2016-12-07', dato: 261 },{ fecha: '2016-12-13', dato: 311 },{ fecha: '2016-12-21', dato: 306 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 2 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_2_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente DIF Revolución</h3>
      <div id="graficaDatosDifRevolucion" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>El municipio de Torreón cuenta con 9 equipos manuales y una estación automática para medir la calidad del aire en Partículas Suspendidas Totales (PST) y Partículas Menores a 10 micras (PM10).</li>
<li>Se ajustaron las fuentes para separar los datos por estaciones de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 2 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_2_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosDifRevolucion === 'undefined') {
    vargraficaDatosDifRevolucion = Morris.Line({
      element: 'graficaDatosDifRevolucion',
      data: [{ fecha: '2016-01-12', dato: 137 },{ fecha: '2016-01-19', dato: 222 },{ fecha: '2016-01-26', dato: 208 },{ fecha: '2016-02-02', dato: 106 },{ fecha: '2016-02-09', dato: 171 },{ fecha: '2016-02-16', dato: 240 },{ fecha: '2016-02-23', dato: 236 },{ fecha: '2016-03-01', dato: 171 },{ fecha: '2016-03-08', dato: 190 },{ fecha: '2016-03-12', dato: 185 },{ fecha: '2016-03-15', dato: 158 },{ fecha: '2016-03-19', dato: 236 },{ fecha: '2016-03-26', dato: 96 },{ fecha: '2016-03-29', dato: 89 },{ fecha: '2016-04-05', dato: 161 },{ fecha: '2016-05-03', dato: 158 },{ fecha: '2016-05-10', dato: 148 },{ fecha: '2016-05-17', dato: 97 },{ fecha: '2016-05-24', dato: 151 },{ fecha: '2016-05-31', dato: 167 },{ fecha: '2016-06-07', dato: 139 },{ fecha: '2016-06-14', dato: 128 },{ fecha: '2016-06-21', dato: 71 },{ fecha: '2016-06-28', dato: 83 },{ fecha: '2016-07-05', dato: 91 },{ fecha: '2016-07-12', dato: 148 },{ fecha: '2016-07-19', dato: 129 },{ fecha: '2016-07-26', dato: 125 },{ fecha: '2016-08-02', dato: 129 },{ fecha: '2016-08-09', dato: 84 },{ fecha: '2016-08-16', dato: 106 },{ fecha: '2016-08-23', dato: 114 },{ fecha: '2016-09-06', dato: 116 },{ fecha: '2016-09-13', dato: 140 },{ fecha: '2016-09-20', dato: 127 },{ fecha: '2016-09-27', dato: 138 },{ fecha: '2016-10-04', dato: 140 },{ fecha: '2016-10-11', dato: 141 },{ fecha: '2016-10-18', dato: 223 },{ fecha: '2016-10-25', dato: 129 },{ fecha: '2016-11-01', dato: 203 },{ fecha: '2016-11-08', dato: 141 },{ fecha: '2016-11-15', dato: 140 },{ fecha: '2016-11-22', dato: 159 },{ fecha: '2016-11-29', dato: 137 },{ fecha: '2016-12-07', dato: 220 },{ fecha: '2016-12-13', dato: 204 },{ fecha: '2016-12-21', dato: 241 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 3 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_3_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Esc. Primaria Emiliano Zapata</h3>
      <div id="graficaDatosEscPrimariaEmilianoZapata" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>El municipio de Torreón cuenta con 9 equipos manuales y una estación automática para medir la calidad del aire en Partículas Suspendidas Totales (PST) y Partículas Menores a 10 micras (PM10).</li>
<li>Se ajustaron las fuentes para separar los datos por estaciones de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 3 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_3_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEscPrimariaEmilianoZapata === 'undefined') {
    vargraficaDatosEscPrimariaEmilianoZapata = Morris.Line({
      element: 'graficaDatosEscPrimariaEmilianoZapata',
      data: [{ fecha: '2016-01-12', dato: 178 },{ fecha: '2016-01-19', dato: 377 },{ fecha: '2016-01-26', dato: 230 },{ fecha: '2016-02-02', dato: 122 },{ fecha: '2016-02-09', dato: 230 },{ fecha: '2016-02-16', dato: 398 },{ fecha: '2016-02-23', dato: 266 },{ fecha: '2016-03-01', dato: 246 },{ fecha: '2016-03-08', dato: 393 },{ fecha: '2016-03-12', dato: 236 },{ fecha: '2016-03-15', dato: 289 },{ fecha: '2016-03-19', dato: 354 },{ fecha: '2016-03-26', dato: 136 },{ fecha: '2016-03-29', dato: 164 },{ fecha: '2016-04-05', dato: 213 },{ fecha: '2016-05-03', dato: 163 },{ fecha: '2016-05-10', dato: 188 },{ fecha: '2016-05-17', dato: 134 },{ fecha: '2016-05-24', dato: 199 },{ fecha: '2016-05-31', dato: 204 },{ fecha: '2016-06-07', dato: 196 },{ fecha: '2016-06-14', dato: 172 },{ fecha: '2016-06-21', dato: 130 },{ fecha: '2016-06-28', dato: 91 },{ fecha: '2016-07-05', dato: 130 },{ fecha: '2016-07-12', dato: 167 },{ fecha: '2016-07-19', dato: 156 },{ fecha: '2016-07-26', dato: 153 },{ fecha: '2016-08-02', dato: 123 },{ fecha: '2016-08-09', dato: 71 },{ fecha: '2016-08-16', dato: 83 },{ fecha: '2016-08-23', dato: 153 },{ fecha: '2016-09-06', dato: 116 },{ fecha: '2016-09-13', dato: 167 },{ fecha: '2016-09-20', dato: 133 },{ fecha: '2016-09-27', dato: 97 },{ fecha: '2016-10-04', dato: 184 },{ fecha: '2016-10-11', dato: 300 },{ fecha: '2016-10-18', dato: 271 },{ fecha: '2016-10-25', dato: 141 },{ fecha: '2016-11-01', dato: 293 },{ fecha: '2016-11-08', dato: 137 },{ fecha: '2016-11-15', dato: 329 },{ fecha: '2016-11-22', dato: 213 },{ fecha: '2016-11-29', dato: 251 },{ fecha: '2016-12-06', dato: 267 },{ fecha: '2016-12-13', dato: 477 },{ fecha: '2016-12-20', dato: 342 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 4 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_4_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Centro Cultural José R. Mijares</h3>
      <div id="graficaDatosCentroCulturalJoseRMijares" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>El municipio de Torreón cuenta con 9 equipos manuales y una estación automática para medir la calidad del aire en Partículas Suspendidas Totales (PST) y Partículas Menores a 10 micras (PM10).</li>
<li>Se ajustaron las fuentes para separar los datos por estaciones de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 4 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_4_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosCentroCulturalJoseRMijares === 'undefined') {
    vargraficaDatosCentroCulturalJoseRMijares = Morris.Line({
      element: 'graficaDatosCentroCulturalJoseRMijares',
      data: [{ fecha: '2016-01-13', dato: 196 },{ fecha: '2016-01-20', dato: 254 },{ fecha: '2016-01-27', dato: 88 },{ fecha: '2016-02-03', dato: 136 },{ fecha: '2016-02-10', dato: 213 },{ fecha: '2016-02-17', dato: 215 },{ fecha: '2016-02-24', dato: 204 },{ fecha: '2016-03-02', dato: 183 },{ fecha: '2016-03-09', dato: 55 },{ fecha: '2016-03-16', dato: 193 },{ fecha: '2016-03-30', dato: 107 },{ fecha: '2016-04-06', dato: 218 },{ fecha: '2016-04-13', dato: 149 },{ fecha: '2016-04-20', dato: 234 },{ fecha: '2016-04-27', dato: 167 },{ fecha: '2016-05-04', dato: 132 },{ fecha: '2016-05-11', dato: 132 },{ fecha: '2016-05-18', dato: 148 },{ fecha: '2016-05-25', dato: 287 },{ fecha: '2016-06-01', dato: 164 },{ fecha: '2016-06-08', dato: 135 },{ fecha: '2016-06-15', dato: 186 },{ fecha: '2016-06-22', dato: 101 },{ fecha: '2016-06-29', dato: 111 },{ fecha: '2016-07-06', dato: 123 },{ fecha: '2016-07-13', dato: 88 },{ fecha: '2016-07-20', dato: 101 },{ fecha: '2016-07-27', dato: 148 },{ fecha: '2016-08-03', dato: 138 },{ fecha: '2016-08-10', dato: 107 },{ fecha: '2016-08-17', dato: 89 },{ fecha: '2016-08-24', dato: 79 },{ fecha: '2016-09-07', dato: 134 },{ fecha: '2016-09-14', dato: 144 },{ fecha: '2016-09-21', dato: 127 },{ fecha: '2016-09-28', dato: 147 },{ fecha: '2016-10-05', dato: 203 },{ fecha: '2016-10-12', dato: 216 },{ fecha: '2016-10-19', dato: 193 },{ fecha: '2016-10-26', dato: 162 },{ fecha: '2016-11-02', dato: 226 },{ fecha: '2016-11-09', dato: 77 },{ fecha: '2016-11-23', dato: 185 },{ fecha: '2016-11-30', dato: 259 },{ fecha: '2016-12-07', dato: 277 },{ fecha: '2016-12-14', dato: 374 },{ fecha: '2016-12-21', dato: 324 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 5 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_5_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Cap. Divina Providencia</h3>
      <div id="graficaDatosCapDivinaProvidencia" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>El municipio de Torreón cuenta con 9 equipos manuales y una estación automática para medir la calidad del aire en Partículas Suspendidas Totales (PST) y Partículas Menores a 10 micras (PM10).</li>
<li>Se ajustaron las fuentes para separar los datos por estaciones de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 5 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_5_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosCapDivinaProvidencia === 'undefined') {
    vargraficaDatosCapDivinaProvidencia = Morris.Line({
      element: 'graficaDatosCapDivinaProvidencia',
      data: [{ fecha: '2016-01-13', dato: 172 },{ fecha: '2016-01-20', dato: 193 },{ fecha: '2016-01-27', dato: 91 },{ fecha: '2016-02-03', dato: 144 },{ fecha: '2016-02-10', dato: 229 },{ fecha: '2016-02-17', dato: 199 },{ fecha: '2016-02-24', dato: 114 },{ fecha: '2016-03-02', dato: 174 },{ fecha: '2016-03-09', dato: 32 },{ fecha: '2016-03-16', dato: 142 },{ fecha: '2016-03-30', dato: 117 },{ fecha: '2016-04-06', dato: 248 },{ fecha: '2016-04-13', dato: 234 },{ fecha: '2016-04-20', dato: 222 },{ fecha: '2016-04-27', dato: 152 },{ fecha: '2016-05-04', dato: 131 },{ fecha: '2016-05-11', dato: 119 },{ fecha: '2016-05-18', dato: 134 },{ fecha: '2016-05-25', dato: 274 },{ fecha: '2016-06-01', dato: 153 },{ fecha: '2016-06-08', dato: 140 },{ fecha: '2016-06-15', dato: 197 },{ fecha: '2016-06-22', dato: 85 },{ fecha: '2016-06-29', dato: 133 },{ fecha: '2016-07-06', dato: 107 },{ fecha: '2016-07-13', dato: 63 },{ fecha: '2016-07-20', dato: 70 },{ fecha: '2016-07-27', dato: 119 },{ fecha: '2016-08-03', dato: 113 },{ fecha: '2016-08-10', dato: 91 },{ fecha: '2016-08-17', dato: 84 },{ fecha: '2016-08-24', dato: 77 },{ fecha: '2016-09-07', dato: 132 },{ fecha: '2016-09-14', dato: 102 },{ fecha: '2016-09-21', dato: 118 },{ fecha: '2016-09-28', dato: 159 },{ fecha: '2016-10-05', dato: 167 },{ fecha: '2016-10-12', dato: 209 },{ fecha: '2016-10-19', dato: 204 },{ fecha: '2016-10-26', dato: 139 },{ fecha: '2016-11-02', dato: 204 },{ fecha: '2016-11-09', dato: 58 },{ fecha: '2016-11-23', dato: 169 },{ fecha: '2016-11-30', dato: 206 },{ fecha: '2016-12-07', dato: 206 },{ fecha: '2016-12-14', dato: 261 },{ fecha: '2016-12-21', dato: 245 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 6 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_6_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Esc. Secundaria General No. 3</h3>
      <div id="graficaDatosEscSecundariaGeneralNo3" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>El municipio de Torreón cuenta con 9 equipos manuales y una estación automática para medir la calidad del aire en Partículas Suspendidas Totales (PST) y Partículas Menores a 10 micras (PM10).</li>
<li>Se ajustaron las fuentes para separar los datos por estaciones de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 6 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_6_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEscSecundariaGeneralNo3 === 'undefined') {
    vargraficaDatosEscSecundariaGeneralNo3 = Morris.Line({
      element: 'graficaDatosEscSecundariaGeneralNo3',
      data: [{ fecha: '2016-01-13', dato: 205 },{ fecha: '2016-01-20', dato: 296 },{ fecha: '2016-01-27', dato: 83 },{ fecha: '2016-02-03', dato: 154 },{ fecha: '2016-02-10', dato: 218 },{ fecha: '2016-02-17', dato: 216 },{ fecha: '2016-02-24', dato: 224 },{ fecha: '2016-03-02', dato: 202 },{ fecha: '2016-03-09', dato: 50 },{ fecha: '2016-03-16', dato: 215 },{ fecha: '2016-03-30', dato: 140 },{ fecha: '2016-04-06', dato: 246 },{ fecha: '2016-04-13', dato: 169 },{ fecha: '2016-04-20', dato: 262 },{ fecha: '2016-04-27', dato: 160 },{ fecha: '2016-05-04', dato: 130 },{ fecha: '2016-05-11', dato: 135 },{ fecha: '2016-05-18', dato: 141 },{ fecha: '2016-05-25', dato: 331 },{ fecha: '2016-06-01', dato: 210 },{ fecha: '2016-06-08', dato: 122 },{ fecha: '2016-06-15', dato: 227 },{ fecha: '2016-06-22', dato: 98 },{ fecha: '2016-06-29', dato: 110 },{ fecha: '2016-07-06', dato: 118 },{ fecha: '2016-07-13', dato: 80 },{ fecha: '2016-07-20', dato: 91 },{ fecha: '2016-07-27', dato: 124 },{ fecha: '2016-08-03', dato: 116 },{ fecha: '2016-08-10', dato: 112 },{ fecha: '2016-08-17', dato: 74 },{ fecha: '2016-08-24', dato: 98 },{ fecha: '2016-09-07', dato: 147 },{ fecha: '2016-09-14', dato: 146 },{ fecha: '2016-09-21', dato: 112 },{ fecha: '2016-09-28', dato: 169 },{ fecha: '2016-10-05', dato: 248 },{ fecha: '2016-10-12', dato: 240 },{ fecha: '2016-10-19', dato: 236 },{ fecha: '2016-10-26', dato: 130 },{ fecha: '2016-11-02', dato: 264 },{ fecha: '2016-11-09', dato: 70 },{ fecha: '2016-11-16', dato: 206 },{ fecha: '2016-11-23', dato: 201 },{ fecha: '2016-11-30', dato: 296 },{ fecha: '2016-12-07', dato: 321 },{ fecha: '2016-12-14', dato: 503 },{ fecha: '2016-12-21', dato: 227 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 7 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_7_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas Suspendidas Totales en Torreón con fuente Esc. Secundaria Técnica No. 83</h3>
      <div id="graficaDatosEscSecundariaTecnicaNo83" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>El municipio de Torreón cuenta con 9 equipos manuales y una estación automática para medir la calidad del aire en Partículas Suspendidas Totales (PST) y Partículas Menores a 10 micras (PM10).</li>
<li>Se ajustaron las fuentes para separar los datos por estaciones de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 7 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_7_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEscSecundariaTecnicaNo83 === 'undefined') {
    vargraficaDatosEscSecundariaTecnicaNo83 = Morris.Line({
      element: 'graficaDatosEscSecundariaTecnicaNo83',
      data: [{ fecha: '2016-01-13', dato: 248 },{ fecha: '2016-01-20', dato: 390 },{ fecha: '2016-01-27', dato: 129 },{ fecha: '2016-02-03', dato: 172 },{ fecha: '2016-02-10', dato: 307 },{ fecha: '2016-02-17', dato: 309 },{ fecha: '2016-02-24', dato: 325 },{ fecha: '2016-03-02', dato: 322 },{ fecha: '2016-03-09', dato: 67 },{ fecha: '2016-03-16', dato: 315 },{ fecha: '2016-03-30', dato: 169 },{ fecha: '2016-04-06', dato: 292 },{ fecha: '2016-04-13', dato: 209 },{ fecha: '2016-04-20', dato: 301 },{ fecha: '2016-04-27', dato: 298 },{ fecha: '2016-05-04', dato: 213 },{ fecha: '2016-05-11', dato: 191 },{ fecha: '2016-05-18', dato: 195 },{ fecha: '2016-05-25', dato: 425 },{ fecha: '2016-06-01', dato: 289 },{ fecha: '2016-06-08', dato: 176 },{ fecha: '2016-06-15', dato: 285 },{ fecha: '2016-06-22', dato: 167 },{ fecha: '2016-06-29', dato: 143 },{ fecha: '2016-07-06', dato: 161 },{ fecha: '2016-07-13', dato: 111 },{ fecha: '2016-07-20', dato: 157 },{ fecha: '2016-07-27', dato: 162 },{ fecha: '2016-08-03', dato: 151 },{ fecha: '2016-08-10', dato: 123 },{ fecha: '2016-08-17', dato: 102 },{ fecha: '2016-08-24', dato: 108 },{ fecha: '2016-09-07', dato: 203 },{ fecha: '2016-09-14', dato: 220 },{ fecha: '2016-09-21', dato: 193 },{ fecha: '2016-09-28', dato: 214 },{ fecha: '2016-10-05', dato: 306 },{ fecha: '2016-10-12', dato: 313 },{ fecha: '2016-10-19', dato: 227 },{ fecha: '2016-10-26', dato: 213 },{ fecha: '2016-11-02', dato: 293 },{ fecha: '2016-11-09', dato: 97 },{ fecha: '2016-11-16', dato: 258 },{ fecha: '2016-11-30', dato: 341 },{ fecha: '2016-12-07', dato: 327 },{ fecha: '2016-12-14', dato: 477 },{ fecha: '2016-12-21', dato: 371 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->agregar('smi-indicador-grafica-1', 'Gráfica 1', $this->seccion_grafica_1_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_1_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-2', 'Gráfica 2', $this->seccion_grafica_2_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_2_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-3', 'Gráfica 3', $this->seccion_grafica_3_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_3_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-4', 'Gráfica 4', $this->seccion_grafica_4_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_4_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-5', 'Gráfica 5', $this->seccion_grafica_5_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_5_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-6', 'Gráfica 6', $this->seccion_grafica_6_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_6_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-7', 'Gráfica 7', $this->seccion_grafica_7_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_7_javascript());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir contenido HTML en el esquema
        $this->contenido->articleBody = $this->lenguetas->html();
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript está dentro de las lengüetas
        $this->javascript = $this->lenguetas->javascript();
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SustentabilidadConcentracionDeParticulasSuspendidasTotales

?>
