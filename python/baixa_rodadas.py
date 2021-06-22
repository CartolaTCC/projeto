#importação das bibliotecas
import pandas as pd
import numpy as np
import os

file_dir = os.path.dirname(os.path.abspath(__file__))

#Requisição dos dados do Cartola e criação dos arquivos
from classes.Crawler import Crawler

#Gravação das rodadas em CSV
cursor = Crawler("https://github.com/henriquepgomide/caRtola/tree/master/data/2020")
for rodada in range(1, 37):
    print("Checando rodada: " + str(rodada))
    '''
        Para cada rodada ele checa se o arquivo existe.
            Caso exista, ele passa para o próximo
            Caso contrário, ele faz a requisição e grava o csv
    '''

    nome_arquivo = file_dir + '/dados/rodadas/rodada_' + str(rodada) + '.csv'
    try:
        with open(nome_arquivo) as f:
            print('Arquivo existente')
    except:
        print("Arquivo inexistente")
        data = cursor.get_data(rodada).replace(np.nan, 0)
        data.to_csv(nome_arquivo, encoding='utf-8', sep =';')
