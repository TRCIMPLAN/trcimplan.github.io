#!/bin/bash

#
# Plataforma de Conocimiento - Copiar
#
# Copyright (C) 2016 Guillermo Valdés Lozano
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
PLATAFORMA_DIR="$HOME/Documentos/GitHub/MovimientoLibre/movimientolibre.github.io"
SITIO_WEB_DIR="$HOME/Documentos/GitHub/TrcIMPLAN/trcimplan.github.io"

echo "[Copiar] los programas de la Plataforma del Conocimiento"
echo "  Origen:  $PLATAFORMA_DIR"
echo "  Destino: $SITIO_WEB_DIR"

#
# Verificar
#
if [ ! -d $PLATAFORMA_DIR ]; then
    echo "Error: No se encuentra el directorio $PLATAFORMA_DIR"
    exit $E_FATAL
fi
if [ ! -d $SITIO_WEB_DIR ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR"
    exit $E_FATAL
fi
if [ ! -d $SITIO_WEB_DIR/bin ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR/bin"
    exit $E_FATAL
fi
if [ ! -d $SITIO_WEB_DIR/lib ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR/lib"
    exit $E_FATAL
fi

#
# Preservar, para luego sobreescribir
#
cd $SITIO_WEB_DIR
echo "  Preservando css."
mv css backup-css
echo "  Preservando imagenes."
mv imagenes backup-imagenes

#
# Eliminar
#
cd $SITIO_WEB_DIR
echo "  Eliminando en la raíz..."
rm -rf fonts
rm -rf img
rm -rf js
rm -rf less
rm -rf scss

echo "  Eliminando en bin..."
rm -f bin/Crear.php

echo "  Eliminando en lib..."
rm -rf lib/Base
rm -rf lib/Michelf

#
# Copiar
#
cd $SITIO_WEB_DIR
echo "  Copiando a la raíz..."
cp -r $PLATAFORMA_DIR/css .
cp -r $PLATAFORMA_DIR/fonts .
cp -r $PLATAFORMA_DIR/imagenes .
cp -r $PLATAFORMA_DIR/img .
cp -r $PLATAFORMA_DIR/js .
cp -r $PLATAFORMA_DIR/less .
cp -r $PLATAFORMA_DIR/scss .

cd $SITIO_WEB_DIR/bin
echo "  Copiando a bin..."
cp $PLATAFORMA_DIR/bin/Crear.php .

cd $SITIO_WEB_DIR/lib
echo "  Copiando a lib..."
cp -r $PLATAFORMA_DIR/lib/Base .
cp -r $PLATAFORMA_DIR/lib/Michelf .

#
# Sobreescribir
#
cd $SITIO_WEB_DIR/css
echo "  Sobreescribiendo css..."
cp -r ../backup-css/* .
cd $SITIO_WEB_DIR
rm -rf backup-css

cd $SITIO_WEB_DIR/imagenes
echo "  Sobreescribiendo imagenes..."
cp -r ../backup-imagenes/* .
cd $SITIO_WEB_DIR
rm -rf backup-imagenes

echo "[Copiar] Terminó."
exit $EXITO
