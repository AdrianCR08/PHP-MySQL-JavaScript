<?php
if (!unlink('testfile2.new')) echo "Could not delete file";
else echo "File 'testfile.new' succesfully deleted";
