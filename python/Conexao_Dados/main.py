# Importar bibliotecas
import re                          # Expressão regulares
import requests                    # Acessar páginas da internet
from bs4 import BeautifulSoup      # Raspar elementos de páginas da internet
import pandas as pd                # Abrir e concatenar bancos de dados

# URL com caminho do repositório
URL = 'https://github.com/henriquepgomide/caRtola/tree/master/data/2020'
html = requests.get(URL)

# Criar objeto BeautifulSoup para raspar urls
soup = BeautifulSoup(html.text, 'lxml')

# Imprimir soup
soup

result = []
for tag in soup.find_all('a', href=True):
    result.append(tag)
    result[70:90:2]

'''
 Selecionar aqueles href que:
  a) possuem o padrão rodada-[número de um ou dois dígitos]
  b) terminam com csv.
'''
regex =  '2020-medias-jogadores.csv'

dict_of_files = {}                                                          # Criar dicionário vazio
for tag in soup.find_all('a', attrs={'href': re.compile(regex)}):           # Encontrar tags de nosso interesse
    href_str = tag.get('href')
    file_name = re.sub('/henriquepgomide/caRtola/blob/master/data/2020/',   # Substituir padrão por nada
        '',
        href_str)

    file_url = re.sub('/henriquepgomide/caRtola/blob/master/data/2020/',    # Substituir padrão por links para arquivos raw
        'https://raw.githubusercontent.com/henriquepgomide/caRtola/master/data/2020/',
        href_str)

    dict_of_files[file_name] = file_url

# Imprimir os primeiros casos do dicionário criado
dict(list(dict_of_files.items())[0:4]) # Ignore este código horrível

# Ler os dataframes dos arquivos
list_of_dataframes = []
for key, item in dict_of_files.items():
    df = pd.read_csv(item)
    df['rodada'] = key
    list_of_dataframes.append(df)

# Combinar lista de DataFrames criados
cartola = pd.concat(list_of_dataframes)
cartola.shape

# Ver informações do dataframe
cartola.info()

# Ver estrutura de dados
cartola.head()
