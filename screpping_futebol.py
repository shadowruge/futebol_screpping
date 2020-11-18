import pandas as pd
import requests
from bs4 import BeautifulSoup
import json


page = requests.get("https://www.cbf.com.br/futebol-brasileiro/competicoes/campeonato-brasileiro-serie-a")
#
soup = BeautifulSoup(page.content, 'html.parser')
tabela = soup.find_all(name='table')


df_full = pd.read_html(str(tabela))[0].head(20)
df = df_full[['Posição', 'PTS', 'J', 'V', 'E', 'D', 'GP', 'GC', 'SG', 'CA', 'CV', '%']] #se esta linha for mudada altera o contexto do arquivo de saida .json
df.columns = ['Pos', 'PTS', 'J', 'V', 'E', 'D', 'GP', 'GC', 'SG', 'CA', 'CV', 'Porcentagem']

tabela_brasileiro = {}
tabela_brasileiro['Rank'] = df.to_dict('records')
js = json.dumps(tabela_brasileiro, ensure_ascii=False, indent=2)
fp = open('futebol_screpping/tabela.json','w', encoding='utf-8')
fp.write(js)
fp.close()

