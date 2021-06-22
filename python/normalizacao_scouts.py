import pandas as pd
import numpy
import os

from classes.Ranking import Ranking
from classes.Normalizacao import Normalizacao
from classes.Ponderacao import Ponderacao
from classes.Pontuacao import Pontuacao

posicoes = ['ata', 'gol', 'lat', 'mei', 'tec', 'zag']
for posicao in posicoes:
    Ranking.generate(posicao)
    Normalizacao.generate(posicao)
    Ponderacao.generate(posicao)
    Pontuacao.generate(posicao)
