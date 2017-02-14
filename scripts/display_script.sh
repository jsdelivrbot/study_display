#!/bin/bash
INPUT_DIRECTORY="$1" #first argument is path to input files
OUTPUT_DIRECTORY="$2" #second argument is path to output files
for xml_file in $INPUT_DIRECTORY/*.xml; do
  echo $xml_file
  xbase=${xml_file##*/}
  echo "t-t-t-ransfooooorming file: "${xbase}
   xsltproc -o $OUTPUT_DIRECTORY/$xbase ~/repos/study_display/anonymize.xsl $xml_file
done
