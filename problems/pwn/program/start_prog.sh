#!/bin/sh
su guest - c $(tcpserver -v -c 1024 0 10000 /usr/share/apache2/pwn/program/run.sh)
