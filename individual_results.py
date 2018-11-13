#!/usr/bin/env python
'''
    Autora: Fernanda A R Silva
    -------------------------------------
    WINET - Wireless Networks Laboratory
    Departamento de Ciencia da Computacao
    Universidade Federal de Minas Gerais

'''

# IMPORTS
import sys
import time
from time import mktime
from datetime import datetime  
from datetime import timedelta

# This Function Identify the Lines in the Log That Contains Allocations
def processFile(filePointer, date):
    print(date)
    line = filePointer.readline()
    while (line):
        if(line.find("allocate") != -1):
            resSelect = 0
            selectQuery = ["SELECT", "node_id", "AND", "OR", "BETWEEN"]
            for pattern in selectQuery:
                resSelect += (line.find(pattern) != -1)
            if(resSelect == len(selectQuery)):
                processLine(int(line.split("=")[1].split(")")[0]), line.split("'")[1], line.split("'")[3], date)
        line = filePointer.readline()

# This Function Retrieve the Data About the Allocation e Calculate it's Duration       
def processLine(node_id, start_date, end_date, date):
    start = datetime.strptime(start_date, "%Y-%m-%d %H:%M:%S.%f") if (start_date.find(".") != -1) else datetime.strptime(start_date, "%Y-%m-%d %H:%M:%S")
    end = datetime.strptime(end_date, "%Y-%m-%d %H:%M:%S.%f") if (end_date.find(".") != -1) else datetime.strptime(end_date, "%Y-%m-%d %H:%M:%S")
    duration = processDuration(end - start)
    outputPath = str("node_"+str(node_id))
    outputPointer = open(outputPath, "a+")
    outputPointer.write(str(str(date)+","+str(duration)+","+str(start_date)+","+str(end_date)+"\n"))

# This Function Process The Duration, Putting it In The Hours:Minutes:Seconds Format
def processDuration(duration):
    minutes = int(duration.seconds/60)
    seconds = duration.seconds - minutes*60
    hours = int(minutes/60) 
    minutes -= hours*60
    hours += duration.days*24
    return str(hours)+":"+str(minutes)+":"+str(seconds)

# This Function Convert a String in a Datetime Variable
def processDate(filePath):
    date = filePath.split("/")
    date = date[len(date) - 1]
    date = datetime.strptime(date, '%Y-%m-%d')
    return date

# This Function Create a Complete Path for a File
def createFilePath(filePath, fileName):
    return filePath + fileName.strftime('%Y-%m-%d')

# MAIN
if __name__ == '__main__':
    if(len(sys.argv) <= 2):
        print("Error: Initial or Final File Path Not Determinated")
        exit(1)
    else:
        i = 0
        path = ""
        # Process Path Given and Catch the Relative Path
        while(i<len(sys.argv[1].split("/"))-1):                                          
            path += sys.argv[1].split("/")[i] + "/"
            i += 1
        # Retrieve The Initial Date and the Final Date
        initDate = processDate(sys.argv[1])
        finalDate = processDate(sys.argv[2]) + timedelta(days=1)
        # While There are Files to be Processed ...
        while(initDate != finalDate):
            flag = True
            # Try to Open the File ...
            try:
                filePointer = open(createFilePath(path, initDate), "r")
            except IOError, e:
                flag = False
            if(flag == True):
                # Process it ...
                processFile(filePointer, initDate.strftime('%Y-%m-%d'))
                filePointer.close()
            # Increment The Date
            initDate += timedelta(days=1)