#!/bin/bash

NO_ARGS=0
E_OPTERROR=65
rootdir="/home/bertozzi/workspace/vioworld_root/trunk/vioworld/"

dbpath="/var/spool/midgard/"

echo "Copying db objects"

rm -R -f ${dbpath}filesync/style/*
rm -R -f ${dbpath}filesync/snippets/*

cp -R ${rootdir}/db_objects/style/* ${dbpath}filesync/style/
cp -R ${rootdir}/db_objects/snippets/* ${dbpath}filesync/snippets/

#echo "Importing styles to "$server".lh-mpe.net"
lynx -source http://localhost/midcom-exec-midcom.helper.filesync/import_style.php
#echo "Importing snippets to "$server".lh-mpe.net"
lynx -source http://localhost/midcom-exec-midcom.helper.filesync/import_snippets.php

exit 0
