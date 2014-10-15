#!/usr/bin/sh

cd /home/ramanujam/www/staging/
git checkout master
git pull
newbranch=`date "+staging_%Y_%m_%d"`
git checkout -b $newbranch
git push -u origin $newbranch
