import autograd.numpy as anp
import numpy as np

from pymoo.model.problem import Problem

class XY(Problem):
    def __init__(self, L, n_max):
        super().__init__(n_var = len(L), n_obj = 2, n_constr = 0, elementwise_evaluation = True)
        self.L = L
        self.n_max = n_max

    def _evaluate(self, x, out, *args, **kwargs):
        out["F"] = np.sum(self.L[x])

L = np.array([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
n_max = 4

problem = XY(L, n_max)
problem.pareto_front();

print(problem.pareto_front())
"""
L = np.array([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
n_max = 4

problem = XY(L, n_max)

from pymoo.model.sampling import Sampling
class mySampling(Sampling):
    def _do(self, problem, n_samples, **kwargs):
        X = np.full((n_samples, problem.n_var), False, dtype = np.bool)

        for k in range(n_samples):
            I = np.random.permutation(problem.n_var)[:problem.n_max]

            X[k, I] = True

        return X

from pymoo.model.crossover import Crossover
class BinaryCrossover(Crossover):
    def __init__(self):
        super().__init__(2, 1)

    def _do(self, problem, X, **kwargs):
        n_parents, n_matings, n_var = X.shape

        _X = np.full((self.n_offsprings, n_matings, problem.n_var), False)

        for k in range(n_matings):
            p1, p2 = X[0, k], X[1, k]

            both_are_true = np.logical_and(p1, p2)
            _X[0, k, both_are_true] = True

            n_remaining = problem.n_max - np.sum(both_are_true)

            I = np.where(np.logical_xor(p1, p2))[0]

            S = I[np.random.permutation(len(I))][:n_remaining]
            _X[0, k, S] = True

        return _X

from pymoo.model.mutation import Mutation
class MyMutation(Mutation):
    def _do(self, problem, X, **kwargs):
        for i in range(X.shape[0]):
            X[i, :] = X[i, :]
            is_false = np.where(np.logical_not(X[i, :]))[0]
            is_true = np.where(X[i, :])[0]
            X[i, np.random.choice(is_false)] = True
            X[i, np.random.choice(is_true)] = False

        return X

from pymoo.algorithms.nsga2 import NSGA2
algorithm = NSGA2(
    pop_size = 100,
    sampling = mySampling(),
    crossover = BinaryCrossover(),
    mutation = MyMutation(),
    eliminate_duplicates = True
)

stop_criteria = ('n_gen', 100)

from pymoo.optimize import minimize
results = minimize(
    problem = problem,
    algorithm = algorithm,
    termination = stop_criteria,
    seed = 1
)

#from pymoo.util.plotting import plot
#plot(results.F, no_fill = True)

opt = np.sort(np.argsort(L)[:n_max])
print("Optimal Subset:", opt)
print("Optimal Function Value: %s" % L[opt].sum())"""
