import numpy as np
import pandas as pd
import matplotlib.pyplot as plt

#scores = np.array([[97, 23], [55, 77], [34, 76], [80, 60], [99,  4], [81,  5], [ 5, 81], [30, 79], [15, 80], [70, 65], [90, 40], [40, 30], [30, 40], [20, 60], [60, 50], [20, 20], [30,  1], [60, 40], [70, 25], [44, 62], [55, 55], [55, 10], [15, 45], [83, 22], [76, 46], [56, 32], [45, 55], [10, 70], [10, 30], [79, 50]])
scores = np.random.rand(100, 2)

class Pareto_front:
    def __init__(self, scores):
        self.scores = scores

        self.population_size = scores.shape[0]
        self.population_ids = np.arange(self.population_size)
        self.pareto_front = np.ones(self.population_size, dtype = bool)

    def Domination(self):
        for i in range(self.population_size):
            for j in range(self.population_size):
                if all(self.scores[j] >= self.scores[i]) and any(self.scores[j] > self.scores[i]):
                    self.pareto_front[i] = 0
                    break

        return self.population_ids[self.pareto_front]

    def Calc_Pareto(self, n_fronteiras):
        fronts = []

        i = 0
        while i < n_fronteiras and self.scores.shape[0] > 0:
            pareto = self.Domination()
            fronts.append(self.scores[pareto])

            self.scores = np.delete(self.scores, pareto, axis=0)

            self.population_size = self.scores.shape[0]
            self.population_ids = np.arange(self.population_size)
            self.pareto_front = np.ones(self.population_size, dtype = bool)

            i = i + 1

        return fronts

x_all = scores[:, 0]
y_all = scores[:, 1]
plt.scatter(x_all, y_all)

Set = Pareto_front(scores)
fronts = Set.Calc_Pareto(2)
for i in range(len(fronts)):
    pareto_front = fronts[i]

    pareto_front_df = pd.DataFrame(pareto_front)
    pareto_front_df.sort_values(0, inplace = True)
    pareto_front = pareto_front_df.values

    x_pareto = pareto_front[:, 0]
    y_pareto = pareto_front[:, 1]

    plt.plot(x_pareto, y_pareto, color = 'r')

plt.xlabel('Objetivo A')
plt.ylabel('Objetivo B')
plt.show()
