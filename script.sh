#!/bin/bash
c=1
while [ $c -le 60 ]
do
 wget -O - hhttp://www.equipe1.com.br/refresh.php >/dev/null 2>&1
 sleep 1
 (( c++ ))
done
