import pandas as pd
import numpy
import os

file_dir = os.path.dirname(os.path.abspath(__file__))
class Ponderacao:
    def generate(nome):
        rank = pd.read_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_ranking.csv', dtype = numpy.float64, sep =';')
        normalizado = pd.read_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_normalizado.csv', dtype = numpy.float64, sep =';')

        normalizado = normalizado.T

        dados = pd.DataFrame(numpy.divide(normalizado.to_numpy(), rank.to_numpy()))
        dados.to_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_ponderado.csv', sep =';', index = False)
