# Importar bibliotecas
import re                          # Expressão regulares
import requests                    # Acessar páginas da internet
from bs4 import BeautifulSoup      # Raspar elementos de páginas da internet
import pandas as pd                # Abrir e concatenar bancos de dados

class Crawler:
    def __init__(self, url):
        self.url = url #URL
        self.html = requests.get(self.url) #Request HTML
        self.soup = BeautifulSoup(self.html.text, 'lxml') #Criar objeto BeautifulSoup para raspar urls

    def get_data(self, rodada):
        soup = self.soup

        #Procura pelos Links
        result = []
        for tag in soup.find_all('a', href=True):
            result.append(tag)
            result[70:90:2]

        '''
         Selecionar aqueles href que:
          a) possuem o padrão rodada-[número de um ou dois dígitos]
          b) terminam com csv.
        '''
        regex =  "rodada-" + str(rodada) + '.csv'

        dict_of_files = {} # Criar dicionário vazio
        for tag in soup.find_all('a', attrs={'href': re.compile(regex)}): #Encontrar tags de nosso interesse
            href_str = tag.get('href')
            file_name = re.sub('/henriquepgomide/caRtola/blob/master/data/2020/', '', href_str) #Substituir padrão por nada

            file_url = re.sub('/henriquepgomide/caRtola/blob/master/data/2020/', 'https://raw.githubusercontent.com/henriquepgomide/caRtola/master/data/2020/',href_str)    # Substituir padrão por links para arquivos raw

            dict_of_files[file_name] = file_url

        # Ler os dataframes dos arquivos
        list_of_dataframes = []
        for key, item in dict_of_files.items():
            df = pd.read_csv(item)
            df['rodada'] = key
            list_of_dataframes.append(df)

        # Combinar lista de DataFrames criados
        cartola = pd.concat(list_of_dataframes)

        return cartola
