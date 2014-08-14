<?php
/**
 * SociedadAlumnosConPerfilCientifico-matematico.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase SociedadAlumnosConPerfilCientifico-matematico
 */
class SociedadAlumnosConPerfilCientifico-matematico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Alumnos con Perfil Científico-Matemático en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'sociedad-alumnos-con-perfil-cientifico-matematico';
        $this->descripcion = 'Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.';
        $this->claves      = 'Torreón, Educación';
        $this->categorias  = array('Educación');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.

<h4>Información recopilada</h4>
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
<td class="centrado">31/12/2013</td>
<td class="derecha">46.00 %</td>
<td>SEP</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
El criterio de "Alumnos buenos y excelentes" provienen de [mejoratuescuela.org](http://www.mejoratuescuela.org)
Consulta la [Base de datos](http://www.enlace.sep.gob.mx/content/ba/pages/base_de_datos_completa_2013/)


<h4>En otras regiones</h4>

<table class="table table-hover table-bordered matriz">
<thead>
<tr>
<th>Región</th>
<th>Fecha</th>
<th>Dato</th>
<th>Fuente</th>
<th>Notas</th>
</tr>
</thead>
<tbody>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">35.00 %</td>
<td>SEP</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">43.00 %</td>
<td>SEP</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">41.00 %</td>
<td>SEP</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">42.00 %</td>
<td>SEP</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadAlumnosConPerfilCientifico-matematico

?>
