import webbrowser

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
import os
import time
import datetime as dt


dir_path = os.getcwd()
chrome_options2 = Options()
chrome_options2.add_argument(r"user-data-dir=" + dir_path + "/pasta/sessao")
driver = webdriver.Chrome(chrome_options=chrome_options2)
driver.get('https://web.whatsapp.com/')
time.sleep(10)

def bot():
    try:
        #PEGAR A BOLINHA
        # l7jjieqr cfzgl7ar ei5e7seu h0viaqh7 tpmajp1w c0uhu3dl riy2oczp dsh4tgtl sy6s5v3r gz7w46tb lyutrhe2 qfejxiq4 fewfhwl7 ovhn1urg ap18qm3b ikwl5qvt j90th5db aumms1qt
        bolinha = driver.find_element(By.CLASS_NAME,'aumms1qt')
        bolinha = driver.find_elements(By.CLASS_NAME,'aumms1qt')
        clica_bolinha = bolinha[-1]
        acao_bolinha = webdriver.common.action_chains.ActionChains(driver)
        acao_bolinha.move_to_element_with_offset(clica_bolinha,0,-20)
        acao_bolinha.click()
        acao_bolinha.perform()
        acao_bolinha.click()
        acao_bolinha.perform()
        time.sleep(1)

        #PEGA O TELEFONE DO CLIENTE
        telefone_cliente = driver.find_element(By.XPATH,'//*[@id="main"]/header/div[2]/div/div/span')
        telefone_final = telefone_cliente.text
        print(telefone_final)
        time.sleep(1)

        #PEGA A MENSAGEM DO CLIENTE
        todas_as_msg = driver.find_elements(By.CLASS_NAME, '_21Ahp')
        todas_as_msg_texto = [e.text for e in todas_as_msg]
        msg = todas_as_msg_texto[-1]
        print(msg)
        time.sleep(2)

        #REPONDER A MENSAGEM
        campo_de_texto = driver.find_element(By.XPATH, '//*[@id="main"]/footer/div[1]/div/span[2]/div/div[2]/div[1]/div/div[1]/p')
        campo_de_texto.click()
        time_id = dt.datetime.now()
        teste_id = time_id.strftime('%d/%m/%Y %H:%M')
        campo_de_texto.send_keys('Olá, ', telefone_final,'... Sou um BOT em fase de testes. ##TesteID:',teste_id, Keys.ENTER)
        time.sleep(1)


        #REPONDER A MENSAGEM
        webdriver.ActionChains(driver).send_keys(Keys.ESCAPE).perform()


    except:
        print('Aguardando novas mensagens...')
        time.sleep(5)

while True:
    bot()