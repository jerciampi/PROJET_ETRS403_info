'''
Lecture du numéro (UID) d'un tag RFID.
Module RFID-RC522 et Raspberry Pi Pico
Plus d'infos:
https://electroniqueamateur.blogspot.com/2021/05/lecture-dun-tag-rfid-avec-module-rc522.html
'''
from mfrc522 import MFRC522 # https://github.com/danjperron/micropython-mfrc522
from utime import sleep
import network
import requests
from time import sleep
from picozero import pico_temp_sensor, pico_led
import machine
import rp2
import sys
from machine import Pin


#Wifi de la borne D-link DAP-1360 stockée dans la salle A214
ssid = 'wifirpi'
password = '88E4VB1YQBI15TM4UCK9KP1LWQ'

red = Pin(1, Pin.OUT)
green = Pin(0, Pin.OUT)

green.value(0)
red.value(0)
            
def connect():
    #Connect to WLAN
    wlan = network.WLAN(network.STA_IF)
    wlan.active(True)
    wlan.connect(ssid, password)
    while wlan.isconnected() == False:
        if rp2.bootsel_button() == 1:
            sys.exit()
        print('Waiting for connection...')
        pico_led.on()
        sleep(0.5)
        pico_led.off()
        sleep(0.5)
    ip = wlan.ifconfig()[0]
    print(f'Connected on {ip}')
    pico_led.on()
    return ip
        
ip = connect()

def uidToString(uid):
    mystring = ""
    for i in uid:
        mystring = "%02X" % i + mystring
    return mystring
                  
rc522 = MFRC522(spi_id=0,sck=6,miso=4,mosi=7,cs=5,rst=3)

print("")
print("Placez une carte RFID pres du lecteur.")
print("")
while True:

    (stat, tag_type) = rc522.request(rc522.REQIDL)

    if stat == rc522.OK:
        (stat, uid) = rc522.SelectTagSN()
        
    if stat == rc522.OK:
        print("Numero : %s" % uidToString(uid))
        res = "%s" % uidToString(uid)
        sleep(1)

        url = 'http://193.48.125.182/Projet/RFID/web/passage_badge.php?res='+res
        response = requests.get(url)
        page = response.text
        valide = page[-24:-20]
        admin = page[-25]
        print (valide)
        print (admin)
        if valide=="alse":
            print("Card ID: "+ str(res)+" STOP: Red Light Activated")
            red.value(1)
            sleep(2)
            red.value(0)
        elif admin=="1":
            print("Card ID: "+ str(res)+" ADMIN MODE: Scan A New Card")
            red.value(1)
            green.value(1)
            admin_timer=0
            new_card = False
            while (admin_timer<15) and not new_card:
                (stat, tag_type) = rc522.request(rc522.REQIDL)
                if stat == rc522.OK:
                    (stat, uid) = rc522.SelectTagSN()
                if stat == rc522.OK:
                    print("Nouvelle carte : %s" % uidToString(uid))
                    new_id = "%s" % uidToString(uid)
                    new_card = True
                    url = 'http://193.48.125.182/Projet/RFID/web/test_ajout_badge.php?res='+new_id
                    response = requests.get(url)
                    sleep(1)
                sleep(1)
                admin_timer+=1
            green.value(0)
            red.value(0)
        elif valide=="true":
            print("Card ID: "+ str(res)+" PASS: Green Light Activated")
            green.value(1)
            sleep(2)
            green.value(0)
