import pandas as pd

import numpy 

path = "c:\\Users\\Irlandês\\Desktop\\"

ata = pd.read_csv(path+'ata.csv')

ata = numpy.transpose(ata)

vetor_classificacao = list([1,2,3,4,5,6,7,8,9,10,11])

ser = pd.Series(vetor_classificacao)

#list_as_array = numpy.array(ata)
#laço para as rodadas
#normalizar os valores entre 0 e 1 para cada rodada
#pegar maior encontrado em cada coluna e dividir os outros

#salvar os valores em uma nova matriz

#print(max(ata[0]))

#print(ata[0]/max(ata[0]))

#classificar cada uma das alternativas



#len(ata_p[0])

#type(vetor_classificacao)

for i in ata:  
    ata_p = ata.sort_values(by=[i], ascending=False)
    valores_substituir = sorted(set(ata_p[i]),reverse=True)
    valores_unicos = range(1,len(valores_substituir)+1)
    ata[i].replace(valores_substituir,valores_unicos,inplace=True)
    
ata.to_csv('ata_normalizado.csv')