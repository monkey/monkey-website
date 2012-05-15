#!/bin/sh

rm -rf *.html *.ctp
cp /home/edsiper/coding/monkeyd/documentation/html/* .
sed -i "s/\.html//g" *.html

for i in *.html; do mv "$i" "${i/.html}".ctp; done
