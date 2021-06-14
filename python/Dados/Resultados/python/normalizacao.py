import pandas as pd
import numpy
import os

file_dir = os.path.dirname(os.path.abspath(__file__))
class Normalizacao:
    def generate(nome):
        dados = pd.read_csv(file_dir + '/../' + nome + '.csv', sep =';')
        dados = numpy.transpose(dados)


        for i in dados:
            dados[i] = (dados[i] - dados[i].min()) / (dados[i].max() - dados[i].min())

        dados.to_csv(file_dir + '/../' + nome + '_normalizado.csv', sep =';', index = False)
