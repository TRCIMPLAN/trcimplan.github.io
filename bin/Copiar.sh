#!/bin/bash

#
# Plataforma de Conocimiento - Copiar
#
# Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.
#

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
SITIO_WEB_DIR="$HOME/Documentos/GitHub/TrcIMPLAN/trcimplan.github.io"
PLATAFORMA_DIR="$HOME/Documentos/GitHub/MovimientoLibre/movimientolibre.github.io"

echo "[Copiar] Inicia..."

# Verificar
if [ ! -d $PLATAFORMA_DIR ]; then
    echo "Error: No se encuentra el directorio $PLATAFORMA_DIR"
    exit $E_FATAL
fi
if [ ! -d $SITIO_WEB_DIR ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR"
    exit $E_FATAL
fi
cd $SITIO_WEB_DIR
if [ ! -d "bin" ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR/bin"
    exit $E_FATAL
fi
if [ ! -d "lib" ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR/lib"
    exit $E_FATAL
fi

# Eliminar
echo "  Eliminando archivos de la Plataforma del Conocimiento..."
cd $SITIO_WEB_DIR
rm -rf vendor
cd $SITIO_WEB_DIR/lib
rm -rf Base
rm -rf Michelf

# Crear directorio dist
cd $SITIO_WEB_DIR
if [ ! -d dist ]; then
    echo "  Creando directorio dist"
    mkdir dist
fi
if [ ! -d dist/css ]; then
    echo "  Creando directorio dist/css"
    mkdir dist/css
fi
echo "  Copiando dist/css/plataforma-de-conocimiento.css"
cp -f $PLATAFORMA_DIR/dist/css/plataforma-de-conocimiento.css dist/css/plataforma-de-conocimiento.css
echo "  Copiando dist/css/sb-admin-2.css"
cp -f $PLATAFORMA_DIR/dist/css/sb-admin-2.css dist/css/sb-admin-2.css
echo "  Copiando dist/css/sb-admin-2.min.css"
cp -f $PLATAFORMA_DIR/dist/css/sb-admin-2.min.css dist/css/sb-admin-2.min.css
if [ ! -d dist/js ]; then
    echo "  Creando directorio dist/js"
    mkdir dist/js
fi
echo "  Copiando dist/js/sb-admin-2.js"
cp -f $PLATAFORMA_DIR/dist/js/sb-admin-2.js dist/js/sb-admin-2.js
echo "  Copiando dist/js/sb-admin-2.min.js"
cp -f $PLATAFORMA_DIR/dist/js/sb-admin-2.min.js dist/js/sb-admin-2.min.js

# Crear directorio imagenes
cd $SITIO_WEB_DIR
if [ ! -d imagenes ]; then
    echo "  Creando por primera vez el directorio imagenes..."
    mkdir imagenes
    cd $SITIO_WEB_DIR/imagenes
    cp -rf $PLATAFORMA_DIR/imagenes/* .
fi

# Copiar
echo "  Copiando archivos de la Plataforma del Conocimiento..."
cd $SITIO_WEB_DIR
cp -r $PLATAFORMA_DIR/vendor .
cd $SITIO_WEB_DIR/bin
cp $PLATAFORMA_DIR/bin/Crear.php .
cd $SITIO_WEB_DIR/lib
cp -r $PLATAFORMA_DIR/lib/Base .
cp -r $PLATAFORMA_DIR/lib/Michelf .

# En lib
cd $SITIO_WEB_DIR/lib
if [ ! -d Autores ]; then
    mkdir Autores
fi
if [ ! -d Configuracion ]; then
    mkdir Configuracion
fi

# Mostrar mensaje de término
echo "[Copiar] Terminó."
exit $EXITO
