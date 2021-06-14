#importação das bibliotecas
import pandas as pd
import numpy as np
import os
import json

#Abrir as variaveis de configuracao
file_dir = os.path.dirname(os.path.abspath(__file__))
with open("Dados/config.json") as json_data_file:
    config = json.load(json_data_file)

#Geração das fronteiras
from Pareto_Front.Pareto import Pareto_front

#Criação do dicionário de arquivos
arquivos = {
    "mei": [],
    "tec": [],
    "gol": [],
    "ata": [],
    "zag": [],
    "lat": []
}
posicoes = ["ata", "gol", "lat", "mei", "tec","zag"]

rodada = input("Rodada: ")
#Leitura do arquivo de rodadas
nome_arquivo = file_dir + '/Dados/Rodadas/rodada_' + str(rodada) + '.csv'
data = pd.read_csv(nome_arquivo, sep =';')
data = data.to_numpy()

#Se deve maximizar ou minmizar
for i in range(17):
    data[:, 16+i] *= config["scouts"][i]

#Criação do dicionário de jogadores
jogadores = {
    "mei": [],
    "tec": [],
    "gol": [],
    "ata": [],
    "zag": [],
    "lat": []
}#Categorizacao dos jogadores por posicao

for row in data:
    jogadores[row[9]].append(row)

for pos in posicoes:
    scores = np.array(jogadores[pos])

    print(str(pos) + ": ")
    i = int(input())
    j = int(input())

    Set = Pareto_front(scores[:, [17+i, 17+j]])
    fronts = Set.Calc_Pareto(2)
    for k in fronts:
        print(scores[k])
