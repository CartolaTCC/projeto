#importação das bibliotecas
import pandas as pd
import numpy as np
import os
import json

#Abrir as variaveis de configuracao
file_dir = os.path.dirname(os.path.abspath(__file__))
with open("Dados/config.json") as json_data_file:
    config = json.load(json_data_file)

#Requisição dos dados do Cartola e criação dos arquivos
from Conexao_Dados.Crawler import Crawler

#Gravação das rodadas em CSV
cursor = Crawler("https://github.com/henriquepgomide/caRtola/tree/master/data/2020")
for rodada in range(1, 37):
    '''
        Para cada rodada ele checa se o arquivo existe.
            Caso exista, ele passa para o próximo
            Caso contrário, ele faz a requisição e grava o csv
    '''
    print("Checando rodada: " + str(rodada))
    nome_arquivo = file_dir + '/Dados/Rodadas/rodada_' + str(rodada) + '.csv'
    try:
        with open(nome_arquivo) as f:
            print('Arquivo existente')
    except:
        print("Arquivo inexistente")
        data = cursor.get_data(rodada).replace(np.nan, 0)
        data.to_csv(nome_arquivo, encoding='utf-8', sep =';')

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
posicoes = ["mei", "tec", "gol", "ata", "zag","lat"]

for rodada in range(1, 37):
    print("Rodada: " + str(rodada))

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
    geral.to_csv(file_dir + '/Dados/Resultados/' + str(pos) +'.csv', sep =';')
