import pandas as pd
import numpy
import os
from sklearn.preprocessing import MinMaxScaler

file_dir = os.path.dirname(os.path.abspath(__file__))
class Normalizacao:
    def generate(nome):
        dados = pd.read_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_original.csv', sep =';')

        scaler = MinMaxScaler()
        scaler.fit(dados)
        dados = scaler.transform(dados)

        dados = pd.DataFrame(dados)
        dados.to_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_normalizado.csv', sep =';', index = False)
