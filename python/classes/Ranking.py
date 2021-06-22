import pandas as pd
import numpy
import os

file_dir = os.path.dirname(os.path.abspath(__file__))
class Ranking:
    def generate(nome):
        dados = pd.read_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_original.csv', sep =';')
        dados = numpy.transpose(dados)

        for i in dados:
            dados_p = dados.sort_values(by=[i], ascending=False)
            valores_substituir = sorted(set(dados_p[i]), reverse=True)
            valores_unicos = range(1, len(valores_substituir) + 1)
            dados[i].replace(valores_substituir, valores_unicos, inplace=True)

        dados.to_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_ranking.csv', sep =';', index = False)
