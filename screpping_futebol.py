import pandas as pd
import requests
from bs4 import BeautifulSoup
import json


page = requests.get("https://www.cbf.com.br/futebol-brasileiro/competicoes/campeonato-brasileiro-serie-a")
#
soup = BeautifulSoup(page.content, 'html.parser')
tabela = soup.find_all(name='table')

'''estrutura de data frame'''
df_full = pd.read_html(str(tabela))[0].head(20)
df = df_full[['Posição', 'PTS', 'J', 'V', 'E', 'D', 'GP', 'GC', 'SG', 'CA', 'CV', '%']]
df.columns = ['Pos', 'PTS', 'J', 'V', 'E', 'D', 'GP', 'GC', 'SG', 'CA', 'CV', '%']

js = json.dumps(tabela_brasileiro, ensure_ascii=False, indent=2)
fp = open('tabela.json','w', encoding='utf-8')
fp.write(js)
fp.close()

tabela_brasileiro = {}
tabela_brasileiro['Rank_Brasileiro'] = df.to_dict('records')

Libertadores = pd.read_json('tabela.json')
a = Libertadores[0:6]

Fase_de_Grupos = pd.read_json('tabela.json')
b = Fase_de_Grupos[0:4]

Fase_Preliminar = pd.read_json('tabela.json')
c = Fase_Preliminar[4:6]

print('\n','Libertadores', a,'\n')
print('\n','Fase_de_Grupos', b, '\n')
print('\n','Fase_Preliminar', c, '\n')
print('\n', df, '\n')
