import pandas as pd
import numpy
import os

file_dir = os.path.dirname(os.path.abspath(__file__))
class Ponderacao:
    def generate(nome):
        rank = pd.read_csv(file_dir + '/../' + nome + '_ranking.csv', dtype = numpy.float64, sep =';')
        normalizado = pd.read_csv(file_dir + '/../' + nome + '_normalizado.csv', dtype = numpy.float64, sep =';')

        dados = normalizado.div(rank, level = 1, fill_value = 1)
        dados.to_csv(file_dir + '/../' + nome + '_ponderado.csv', sep =';', index = False)
