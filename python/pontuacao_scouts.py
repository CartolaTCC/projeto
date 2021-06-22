#importação das bibliotecas
import pandas as pd
import numpy as np
import os
import json

inicio = int(input('Rodada de inicio: '))
fim = int(input('Rodada de fim: '))

#Arquivos de configuração
file_dir = os.path.dirname(os.path.abspath(__file__))
with open("config/config.json") as json_data_file:
    config = json.load(json_data_file)


#Geração das fronteiras
from classes.Pareto import Pareto_front

#Criação do dicionário de arquivos
arquivos = {
    "mei": [],
    "tec": [],
    "gol": [],
    "ata": [],
    "zag": [],
    "lat": []
}
posicoes = ["mei", "tec", "gol", "ata", "zag","lat"]

for rodada in range(inicio, fim):
    print("Rodada: " + str(rodada))

    #Leitura do arquivo de rodadas
    nome_arquivo = file_dir + '/dados/rodadas/rodada_' + str(rodada) + '.csv'
    data = pd.read_csv(nome_arquivo, sep =';')
    data = data.to_numpy()

    #Se deve maximizar ou minmizar
    for i in range(17):
        data[:, 17+i] *= config["scouts"]["pesos"][i]

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

        pontuacoes = []
        for i in range(17):
            for j in range(i):
                if config["posicoes"][pos][i] == 1 and config["posicoes"][pos][j] == 1:
                    print(i, j)
                    Set = Pareto_front(scores[:, [17+i, 17+j]])

                    fronts = Set.Calc_Pareto(1)

                    top = []
                    for k in fronts[0]:
                        top.append(scores[k, 11])

                    top.sort(reverse=True)

                    soma = 0
                    cont = 0
                    for k in top:
                        soma = soma + k
                        cont += 1

                        if cont > 5:
                            break

                    pontuacoes.append(round(soma, 2))

        arquivos[pos].append(pontuacoes)


for pos in posicoes:
    geral = pd.DataFrame(arquivos[pos])
    geral.to_csv(file_dir + '/dados/pontuacao_scouts/' + str(pos) +'_original.csv', sep =';')
