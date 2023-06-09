# -*- coding: utf-8 -*-
"""
Created on Wed Nov 17 14:02:50 2021

@author: Tim
"""

#Count how many times each word occurs in a file

#Read the file name from the user and open the file
filename = input("Enter the name of a text file: ")
inf = open(filename, "r")

# Create a new, empty dictionary
counts = {}

# Count the words in the file
for line in inf :
    words = line.split()
    for word in words:
        if word in counts:
            counts[word] += 1
        else :
            counts[word] = 1

#Close the file
inf.close()

#display the counts
for word in sorted(counts):
    print("%s: %d" % (word, counts[word]))
    