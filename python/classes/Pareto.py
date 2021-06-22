# Importar bibliotecas
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt

#Non dominated Sort
class Pareto_front:
    #Definição das variaveis bases
    def __init__(self, scores):
        self.scores = scores

        self.population_size = scores.shape[0]
        self.population_ids = np.arange(self.population_size)
        self.pareto_front = np.ones(self.population_size, dtype = bool)

    #Definição das dominancias
    def Domination(self):
        for i in range(self.population_size):
            for j in range(self.population_size):
                if all(self.scores[j] >= self.scores[i]) and any(self.scores[j] > self.scores[i]):
                    self.pareto_front[i] = 0
                    break

        return self.population_ids[self.pareto_front]

    #Processamento das fronteiras
    def Calc_Pareto(self, n_fronteiras):
        fronts = []

        i = 0
        while i < n_fronteiras and self.scores.shape[0] > 0:
            pareto = self.Domination()
            fronts.append(pareto)

            self.scores = np.delete(self.scores, pareto, axis=0)

            self.population_size = self.scores.shape[0]
            self.population_ids = np.arange(self.population_size)
            self.pareto_front = np.ones(self.population_size, dtype = bool)

            i = i + 1

        return fronts
