<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadConcentracionDeParticulasMenoresA10Micras
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
 * Clase SustentabilidadConcentracionDeParticulasMenoresA10Micras
 */
class SustentabilidadConcentracionDeParticulasMenoresA10Micras extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Concentración de Partículas menores a 10 micras en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2017-04-04T09:26:11';
        // El nombre del archivo a crear
        $this->archivo                   = 'sustentabilidad-concentracion-de-particulas-menores-a-10-micras';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Medición de la calidad del aire por la medición de las partículas menores a 10 microgramos por metro cúbico. La Norma Oficial Mexicana de Salud 025 indica que se está dentro de la norma por debajo de 70 ug por m3.';
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
        $this->fuentes                   = array('DIF Revolución', 'HECAT', 'Centro Cultural José R. Mijares');
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
            <td>59</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>13/01/2016</td>
            <td>67</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>19/01/2016</td>
            <td>83</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>20/01/2016</td>
            <td>123</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>26/01/2016</td>
            <td>40</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>27/01/2016</td>
            <td>36</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>02/02/2016</td>
            <td>27</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>03/02/2016</td>
            <td>49</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>09/02/2016</td>
            <td>61</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>10/02/2016</td>
            <td>91</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>16/02/2016</td>
            <td>84</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>17/02/2016</td>
            <td>87</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>23/02/2016</td>
            <td>54</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>24/02/2016</td>
            <td>84</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>01/03/2016</td>
            <td>49</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>02/03/2016</td>
            <td>89</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>08/03/2016</td>
            <td>34</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>09/03/2016</td>
            <td>59</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>12/03/2016</td>
            <td>42</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>15/03/2016</td>
            <td>56</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>16/03/2016</td>
            <td>71</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>19/03/2016</td>
            <td>57</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>26/03/2016</td>
            <td>30</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>29/03/2016</td>
            <td>21</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>30/03/2016</td>
            <td>92</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>05/04/2016</td>
            <td>55</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>06/04/2016</td>
            <td>96</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>13/04/2016</td>
            <td>64</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>20/04/2016</td>
            <td>103</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>27/04/2016</td>
            <td>47</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>03/05/2016</td>
            <td>42</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>10/05/2016</td>
            <td>44</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>11/05/2016</td>
            <td>68</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>17/05/2016</td>
            <td>30</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>18/05/2016</td>
            <td>66</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>24/05/2016</td>
            <td>51</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>25/05/2016</td>
            <td>136</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2016</td>
            <td>43</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>01/06/2016</td>
            <td>77</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>07/06/2016</td>
            <td>50</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>08/06/2016</td>
            <td>34</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>14/06/2016</td>
            <td>37</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>15/06/2016</td>
            <td>105</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>21/06/2016</td>
            <td>28</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>22/06/2016</td>
            <td>59</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>29/06/2016</td>
            <td>54</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>05/07/2016</td>
            <td>28</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>06/07/2016</td>
            <td>66</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>12/07/2016</td>
            <td>35</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>13/07/2016</td>
            <td>45</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>19/07/2016</td>
            <td>28</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>20/07/2016</td>
            <td>65</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>26/07/2016</td>
            <td>35</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>27/07/2016</td>
            <td>64</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>02/08/2016</td>
            <td>43</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>03/08/2016</td>
            <td>52</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>09/08/2016</td>
            <td>25</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>10/08/2016</td>
            <td>52</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>16/08/2016</td>
            <td>35</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>17/08/2016</td>
            <td>32</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>23/08/2016</td>
            <td>35</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>24/08/2016</td>
            <td>32</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>06/09/2016</td>
            <td>29</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>07/09/2016</td>
            <td>71</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>13/09/2016</td>
            <td>42</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>14/09/2016</td>
            <td>64</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>20/09/2016</td>
            <td>43</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>21/09/2016</td>
            <td>52</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>27/09/2016</td>
            <td>48</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>27/09/2016</td>
            <td>41</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>28/09/2016</td>
            <td>63</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>04/10/2016</td>
            <td>42</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>04/10/2016</td>
            <td>111</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>05/10/2016</td>
            <td>97</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>11/10/2016</td>
            <td>48</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>11/10/2016</td>
            <td>106</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>12/10/2016</td>
            <td>109</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>18/10/2016</td>
            <td>64</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>18/10/2016</td>
            <td>169</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>19/10/2016</td>
            <td>109</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>25/10/2016</td>
            <td>42</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>25/10/2016</td>
            <td>70</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>26/10/2016</td>
            <td>64</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>01/11/2016</td>
            <td>70</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>01/11/2016</td>
            <td>155</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>02/11/2016</td>
            <td>109</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>08/11/2016</td>
            <td>41</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>08/11/2016</td>
            <td>71</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>09/11/2016</td>
            <td>25</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>15/11/2016</td>
            <td>47</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>15/11/2016</td>
            <td>116</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>16/11/2016</td>
            <td>90</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>22/11/2016</td>
            <td>49</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>22/11/2016</td>
            <td>89</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>23/11/2016</td>
            <td>76</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>29/11/2016</td>
            <td>34</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>29/11/2016</td>
            <td>84</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2016</td>
            <td>105</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>06/12/2016</td>
            <td>65</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>06/12/2016</td>
            <td>149</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>07/12/2016</td>
            <td>99</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>13/12/2016</td>
            <td>68</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>13/12/2016</td>
            <td>174</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>14/12/2016</td>
            <td>180</td>
            <td>HECAT</td>
            <td></td>
          </tr>
          <tr>
            <td>20/12/2016</td>
            <td>76</td>
            <td>DIF Revolución</td>
            <td></td>
          </tr>
          <tr>
            <td>20/12/2016</td>
            <td>192</td>
            <td>Centro Cultural José R. Mijares</td>
            <td></td>
          </tr>
          <tr>
            <td>21/12/2016</td>
            <td>126</td>
            <td>HECAT</td>
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
      <h3>Gráfica de Concentración de Partículas menores a 10 micras en Torreón con fuente DIF Revolución</h3>
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
     * Sección Gráfica 1 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_1_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosDifRevolucion === 'undefined') {
    vargraficaDatosDifRevolucion = Morris.Line({
      element: 'graficaDatosDifRevolucion',
      data: [{ fecha: '2016-01-12', dato: 59 },{ fecha: '2016-01-19', dato: 83 },{ fecha: '2016-01-26', dato: 40 },{ fecha: '2016-02-02', dato: 27 },{ fecha: '2016-02-09', dato: 61 },{ fecha: '2016-02-16', dato: 84 },{ fecha: '2016-02-23', dato: 54 },{ fecha: '2016-03-01', dato: 49 },{ fecha: '2016-03-08', dato: 34 },{ fecha: '2016-03-12', dato: 42 },{ fecha: '2016-03-15', dato: 56 },{ fecha: '2016-03-19', dato: 57 },{ fecha: '2016-03-26', dato: 30 },{ fecha: '2016-03-29', dato: 21 },{ fecha: '2016-04-05', dato: 55 },{ fecha: '2016-05-03', dato: 42 },{ fecha: '2016-05-10', dato: 44 },{ fecha: '2016-05-17', dato: 30 },{ fecha: '2016-05-24', dato: 51 },{ fecha: '2016-05-31', dato: 43 },{ fecha: '2016-06-07', dato: 50 },{ fecha: '2016-06-14', dato: 37 },{ fecha: '2016-06-21', dato: 28 },{ fecha: '2016-07-05', dato: 28 },{ fecha: '2016-07-12', dato: 35 },{ fecha: '2016-07-19', dato: 28 },{ fecha: '2016-07-26', dato: 35 },{ fecha: '2016-08-02', dato: 43 },{ fecha: '2016-08-09', dato: 25 },{ fecha: '2016-08-16', dato: 35 },{ fecha: '2016-08-23', dato: 35 },{ fecha: '2016-09-06', dato: 29 },{ fecha: '2016-09-13', dato: 42 },{ fecha: '2016-09-20', dato: 43 },{ fecha: '2016-09-27', dato: 48 },{ fecha: '2016-10-04', dato: 42 },{ fecha: '2016-10-11', dato: 48 },{ fecha: '2016-10-18', dato: 64 },{ fecha: '2016-10-25', dato: 42 },{ fecha: '2016-11-01', dato: 70 },{ fecha: '2016-11-08', dato: 41 },{ fecha: '2016-11-15', dato: 47 },{ fecha: '2016-11-22', dato: 49 },{ fecha: '2016-11-29', dato: 34 },{ fecha: '2016-12-06', dato: 65 },{ fecha: '2016-12-13', dato: 68 },{ fecha: '2016-12-20', dato: 76 }],
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
      <h3>Gráfica de Concentración de Partículas menores a 10 micras en Torreón con fuente HECAT</h3>
      <div id="graficaDatosHecat" class="grafica"></div>
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
  if (typeof vargraficaDatosHecat === 'undefined') {
    vargraficaDatosHecat = Morris.Line({
      element: 'graficaDatosHecat',
      data: [{ fecha: '2016-01-13', dato: 67 },{ fecha: '2016-01-20', dato: 123 },{ fecha: '2016-01-27', dato: 36 },{ fecha: '2016-02-03', dato: 49 },{ fecha: '2016-02-10', dato: 91 },{ fecha: '2016-02-17', dato: 87 },{ fecha: '2016-02-24', dato: 84 },{ fecha: '2016-03-02', dato: 89 },{ fecha: '2016-03-09', dato: 59 },{ fecha: '2016-03-16', dato: 71 },{ fecha: '2016-03-30', dato: 92 },{ fecha: '2016-04-06', dato: 96 },{ fecha: '2016-04-13', dato: 64 },{ fecha: '2016-04-20', dato: 103 },{ fecha: '2016-04-27', dato: 47 },{ fecha: '2016-05-11', dato: 68 },{ fecha: '2016-05-18', dato: 66 },{ fecha: '2016-05-25', dato: 136 },{ fecha: '2016-06-01', dato: 77 },{ fecha: '2016-06-08', dato: 34 },{ fecha: '2016-06-15', dato: 105 },{ fecha: '2016-06-22', dato: 59 },{ fecha: '2016-06-29', dato: 54 },{ fecha: '2016-07-06', dato: 66 },{ fecha: '2016-07-13', dato: 45 },{ fecha: '2016-07-20', dato: 65 },{ fecha: '2016-07-27', dato: 64 },{ fecha: '2016-08-03', dato: 52 },{ fecha: '2016-08-10', dato: 52 },{ fecha: '2016-08-17', dato: 32 },{ fecha: '2016-08-24', dato: 32 },{ fecha: '2016-09-07', dato: 71 },{ fecha: '2016-09-14', dato: 64 },{ fecha: '2016-09-21', dato: 52 },{ fecha: '2016-09-28', dato: 63 },{ fecha: '2016-10-05', dato: 97 },{ fecha: '2016-10-12', dato: 109 },{ fecha: '2016-10-19', dato: 109 },{ fecha: '2016-10-26', dato: 64 },{ fecha: '2016-11-02', dato: 109 },{ fecha: '2016-11-09', dato: 25 },{ fecha: '2016-11-16', dato: 90 },{ fecha: '2016-11-23', dato: 76 },{ fecha: '2016-11-30', dato: 105 },{ fecha: '2016-12-07', dato: 99 },{ fecha: '2016-12-14', dato: 180 },{ fecha: '2016-12-21', dato: 126 }],
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
      <h3>Gráfica de Concentración de Partículas menores a 10 micras en Torreón con fuente Centro Cultural José R. Mijares</h3>
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
     * Sección Gráfica 3 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_3_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosCentroCulturalJoseRMijares === 'undefined') {
    vargraficaDatosCentroCulturalJoseRMijares = Morris.Line({
      element: 'graficaDatosCentroCulturalJoseRMijares',
      data: [{ fecha: '2016-09-27', dato: 41 },{ fecha: '2016-10-04', dato: 111 },{ fecha: '2016-10-11', dato: 106 },{ fecha: '2016-10-18', dato: 169 },{ fecha: '2016-10-25', dato: 70 },{ fecha: '2016-11-01', dato: 155 },{ fecha: '2016-11-08', dato: 71 },{ fecha: '2016-11-15', dato: 116 },{ fecha: '2016-11-22', dato: 89 },{ fecha: '2016-11-29', dato: 84 },{ fecha: '2016-12-06', dato: 149 },{ fecha: '2016-12-13', dato: 174 },{ fecha: '2016-12-20', dato: 192 }],
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

} // Clase SustentabilidadConcentracionDeParticulasMenoresA10Micras

?>
