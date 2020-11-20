import pandas as pd
import requests
from bs4 import BeautifulSoup
import json
import legenda

#get no site da CBF
page = requests.get("https://www.cbf.com.br/futebol-brasileiro/competicoes/campeonato-brasileiro-serie-a")

#Este módulo define uma classe HTMLParser que serve como base para a análise de arquivos de texto formatados em HTMLL.
soup = BeautifulSoup(page.content, 'html.parser')
tabela = soup.find_all(name='table')

#le somente as 20 linhas que importam
df_full = pd.read_html(str(tabela))[0].head(20)
#se esta linha for mudada altera o contexto do arquivo de saida .json
df = df_full[['Posição', 'PTS', 'J', 'V', 'E', 'D', 'GP', 'GC', 'SG', 'CA', 'CV', '%']] 
df.columns = ['Pos', 'PTS', 'J', 'V', 'E', 'D', 'GP', 'GC', 'SG', 'CA', 'CV', 'Porcentagem']

#cria um dicionario
tabela_brasileiro = {}
tabela_brasileiro['Rank'] = df.to_dict('records')
js = json.dumps(tabela_brasileiro, ensure_ascii=False, indent=2)
fp = open('futebol_screpping/tabela.json','w', encoding='utf-8')
fp.write(js)
fp.close()

#Printa a tabela do campeonato
print('\n','Campeonato Brasileiro:')
print('\n',df,'\n')

#Opção para pegar somente as linhas do arquivo json
file = open('futebol_screpping/tabela.json', 'r')
linhas = file.readlines()    
file.close()
