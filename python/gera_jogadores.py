#importação das bibliotecas
import pandas as pd
import numpy as np
import os
import json

#Arquivos de configuração
file_dir = os.path.dirname(os.path.abspath(__file__))
with open("config/config.json") as json_data_file:
    config = json.load(json_data_file)

dict = {}
for rodada in range(1, 37):
    #Leitura do arquivo da rodada
    nome_arquivo = file_dir + '/dados/rodadas/rodada_' + str(rodada) + '.csv'
    data = pd.read_csv(nome_arquivo, sep =';')

    dict.update(data.set_index('atletas.atleta_id').T.to_dict('list'))

while(1):
    indice = int(input())
    print(dict[indice])
