#!/bin/bash
echo "Enter Database name"
read db
 mysql -u root -p $db < dumptestdb.sql
