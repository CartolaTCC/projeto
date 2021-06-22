#importação das bibliotecas
import pandas as pd
import numpy as np
import os
import json

#Arquivos de configuração
file_dir = os.path.dirname(os.path.abspath(__file__))
with open("config/config.json") as json_data_file:
    config = json.load(json_data_file)
'''
dict = {}
for rodada in range(1, 37):
    #Leitura do arquivo da rodada
    nome_arquivo = file_dir + '/dados/rodadas/rodada_' + str(rodada) + '.csv'
    data = pd.read_csv(nome_arquivo, sep =';')

    dict.update(data.set_index('atletas.atleta_id').T.to_dict('list'))
'''
rodada_atual = int(input('Rodada atual: '))
janela_analise = int(input('Janela de analise: '))


jogadores = {
    "mei": [],
    "tec": [],
    "gol": [],
    "ata": [],
    "zag": [],
    "lat": []
}
for rodada in range(rodada_atual - janela_analise, rodada_atual):
    #Leitura do arquivo da rodada
    nome_arquivo = file_dir + '/Dados/Rodadas/rodada_' + str(rodada) + '.csv'
    data = pd.read_csv(nome_arquivo, sep =';')
    data = data.to_numpy()

    #Ponderação dos dados
    for i in range(17):
        data[:, 17+i] *= config["scouts"]["pesos"][i]

    for row in data:
        jogadores[row[9]].append(row[[6, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33]])

#Geração das fronteiras
from classes.Pareto import Pareto_front

posicoes = ["ata", "gol", "lat", "mei", "tec","zag"]
for pos in posicoes:
    data = pd.DataFrame(jogadores[pos])
    data = data.groupby(by = [0]).sum()
    jogadores[pos] = data

for pos in posicoes:
    scores = jogadores[pos].to_numpy()
    indices = jogadores[pos].index

    print(str(pos) + ": ")
    i = int(input())
    j = int(input())

    Set = Pareto_front(scores[:, [i, j]])
    fronts = Set.Calc_Pareto(2)
    for k in fronts:
        print(indices[k])
