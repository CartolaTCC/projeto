import pandas as pd

import numpy

ata = pd.read_csv('ata.csv')
ata = numpy.transpose(ata)

for i in ata:
    ata_p = ata.sort_values(by=[i], ascending=False)
    valores_substituir = sorted(set(ata_p[i]), reverse=True)
    valores_unicos = range(1, len(valores_substituir) + 1)
    ata[i].replace(valores_substituir, valores_unicos, inplace=True)

ata.to_csv('ata_normalizado.csv')

gol = pd.read_csv('gol.csv')
gol = numpy.transpose(gol)

for i in gol:
    gol_p = gol.sort_values(by=[i], ascending=False)
    valores_substituir = sorted(set(gol_p[i]), reverse=True)
    valores_unicos = range(1, len(valores_substituir) + 1)
    gol[i].replace(valores_substituir, valores_unicos, inplace=True)

gol.to_csv('gol_normalizado.csv')

lat = pd.read_csv('lat.csv')
lat = numpy.transpose(lat)

for i in lat:
    lat_p = lat.sort_values(by=[i], ascending=False)
    valores_substituir = sorted(set(lat_p[i]), reverse=True)
    valores_unicos = range(1, len(valores_substituir) + 1)
    lat[i].replace(valores_substituir, valores_unicos, inplace=True)

lat.to_csv('lat_normalizado.csv')

mei = pd.read_csv('mei.csv')
mei = numpy.transpose(mei)

for i in mei:
    mei_p = mei.sort_values(by=[i], ascending=False)
    valores_substituir = sorted(set(mei_p[i]), reverse=True)
    valores_unicos = range(1, len(valores_substituir) + 1)
    mei[i].replace(valores_substituir, valores_unicos, inplace=True)

mei.to_csv('mei_normalizado.csv')

tec = pd.read_csv('tec.csv')
tec = numpy.transpose(tec)

for i in tec:
    tec_p = tec.sort_values(by=[i], ascending=False)
    valores_substituir = sorted(set(tec_p[i]), reverse=True)
    valores_unicos = range(1, len(valores_substituir) + 1)
    tec[i].replace(valores_substituir, valores_unicos, inplace=True)

tec.to_csv('tec_normalizado.csv')

zag = pd.read_csv('zag.csv')
zag = numpy.transpose(zag)

for i in zag:
    zag_p = zag.sort_values(by=[i], ascending=False)
    valores_substituir = sorted(set(zag_p[i]), reverse=True)
    valores_unicos = range(1, len(valores_substituir) + 1)
    zag[i].replace(valores_substituir, valores_unicos, inplace=True)

zag.to_csv('zag_normalizado.csv')

