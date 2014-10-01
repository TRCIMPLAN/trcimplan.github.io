<?php
/**
 * Seguridad.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMICategorias;

/**
 * Clase Seguridad
 */
class Seguridad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Seguridad';
        $this->nombre_menu   = 'Categorías';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'seguridad';
        $this->descripcion   = 'Matriz de indicadores en la categoría Seguridad';
        $this->imagen_previa = '';
        $this->icono         = 'fa fa-crosshairs';
        $this->claves        = 'IMPLAN, Indicadores, Seguridad';
        $this->categorias    = array('Indicadores');
        $this->contenido     = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Cantidad de Policías</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-cantidad-de-policias.html" data-toggle="tooltip" title="Cantidad, 28/02/2014, Ayuntamiento de Torreón">768</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">786</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">277</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">66</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">72</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1,201</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">19</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">38</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de Vehículos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">95</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">52</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">152</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/05/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-delitos.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SNSP">1,466.36</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-delitos.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SNSP">1,078.32</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-delitos.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SNSP">706.65</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-delitos.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SNSP">820.27</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-delitos.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SNSP">1,216.77</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">45.76</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">57.38</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">46.75</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">55.70</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">49.88</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Policías por Habitante</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-policias-por-habitante.html" data-toggle="tooltip" title="Por cada mil, 28/02/2014, Ayuntamiento de Torreón">1.0997</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de VehÍculos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">232.82</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">347.43</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">148.28</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">113.20</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">243.56</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Secuestro</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">1.63</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">1.73</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">0.67</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">0.00</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">1.40</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Seguridad

?>
