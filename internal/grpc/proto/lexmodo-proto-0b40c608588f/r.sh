#!/usr/bin/env bash

# This will replace all instances of a string in folder names, filenames,
# and within files.  Sometimes you have to run it twice, if directory names change.


# Example usage:
# replace_string apple banana

n="lexmodo";
l="lexmodo";
echo $n;
find ./ -type f -exec sed -i -e "s/$n/$l/g" {} \; 
