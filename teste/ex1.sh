#!/bin/bash
# Variavel CAM tem o caminho completo até a lista telefonica
CAM='/var/www/html/16MAR/teste/ag.txt'
clear
echo
echo '---- Programa Contatos ----'
echo -n 'Nome: '
read VNOME
echo -n 'Celular: '
read VCEL
echo "$VNOME $VCEL" >> "$CAM"
tail "$CAM"
