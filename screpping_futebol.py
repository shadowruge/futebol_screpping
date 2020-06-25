import pandas as pd
import requests
from bs4 import BeautifulSoup
import json
''''''
page = requests.get("https://www.cbf.com.br/futebol-brasileiro/competicoes/campeonato-brasileiro-serie-a")
''''''
soup = BeautifulSoup(page.content, 'html.parser')
tabela = soup.find_all(name='table')
''''''
df_full = pd.read_html(str(tabela))[0].head(20)
df = df_full[['Posição', 'PTS', 'J', 'V', 'E', 'D', 'GP', 'GC', 'SG', 'CA', 'CV', '%']]
'''OPCIONAL'''
'''df.columns = ['Pos', 'PTS', 'J', 'V', 'E', 'D', 'GP', 'GC', 'SG', 'CA', 'CV', '%']'''
''''''
tabela_brasileiro = {}
tabela_brasileiro['Rank_Brasileiro'] = df.to_dict('records')
js = json.dumps(tabela_brasileiro, ensure_ascii=False, indent=2)
fp = open('tabela.json','w', encoding='utf-8')
fp.write(js)
fp.close()
''''''
print('\n',df)

with open('tabela.json', 'r') as fin:
    a = fin.readlines()[3]

with open('tabela.json', 'r') as fin:
    b = fin.readlines()[17]

with open('tabela.json', 'r') as fin:
    c = fin.readlines()[31]

with open('tabela.json', 'r') as fin:
    d = fin.readlines()[45]

with open('tabela.json', 'r') as fin:
    e = fin.readlines()[59]

with open('tabela.json', 'r') as fin:
    f = fin.readlines()[73]

with open('tabela.json', 'r') as fin:
    g = fin.readlines()[87]

with open('tabela.json', 'r') as fin:
    h = fin.readlines()[101]

with open('tabela.json', 'r') as fin:
    i = fin.readlines()[115]

with open('tabela.json', 'r') as fin:
    j = fin.readlines()[129]

with open('tabela.json', 'r') as fin:
    l = fin.readlines()[143]

with open('tabela.json', 'r') as fin:
    m = fin.readlines()[157]
''''''
print("Copa libertadores:")
print('\n', a, b, c, d, e, f)
print("CopaSulamericana:")
print('\n', g, h, i, j, l, m)
