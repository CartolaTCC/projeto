import pandas as pd
import numpy
import os

from ranking import Ranking
from normalizacao import Normalizacao
from ponderacao import Ponderacao
from pontuacao import Pontuacao

posicoes = ['ata', 'gol', 'lat', 'mei', 'tec', 'zag']
for posicao in posicoes:
    Ranking.generate(posicao)
    Normalizacao.generate(posicao)
    Ponderacao.generate(posicao)
    Pontuacao.generate(posicao)
