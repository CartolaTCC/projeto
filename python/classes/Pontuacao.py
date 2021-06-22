import pandas as pd
import numpy
import os
import json

file_dir = os.path.dirname(os.path.abspath(__file__))
with open(file_dir + "/../config/config.json") as json_data_file:
    config = json.load(json_data_file)

class Pontuacao:
    def generate(nome):
        ponderado = pd.read_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_ponderado.csv', dtype = numpy.float64, sep =';')

        ponderado["soma"] = ponderado.sum(axis = 1)

        scouts = ["[0 FF] - Finalização para Fora",
            "[1 FS] - Falta Sofrida",
            "[2 G] - Gol",
            "[3 PI] - Passe Incompleto",
            "[4 CA] - Cartão Amarelo",
            "[5 FC] - Falta Cometida",
            "[6 DS] - Desarme",
            "[7 FT] - Finalização na Trave",
            "[8 DD] - Defesa Difícil",
            "[9 GS] - Gol Sofrido",
            "[10 FD] - Finalização Defendida",
            "[11 GC] - Gol Contra",
            "[12 SG] - Saldo de Gols (sem sofrer gol)",
            "[13 A] - Assistência",
            "[14 I] - Impedimento",
            "[15 CV] - Cartão Vermelho",
            "[16 PP] - Pênalti Perdido"]

        combinacoes = []
        for i in range(17):
            for j in range(i):
                if config["posicoes"][nome][i] == 1 and config["posicoes"][nome][j] == 1:
                    combinacoes.append(scouts[i] + " x " + scouts[j])

        df = pd.DataFrame(combinacoes, columns=['combinacao'])
        df["soma"] = ponderado["soma"]

        df = df.sort_values(by = ['soma'])

        df.to_csv(file_dir + '/../dados/pontuacao_scouts/' + nome + '_pontuacao.csv', sep =';', index = False)
