#!/usr/bin/env python
'''
    Autora: Fernanda Aparecida Rodrigues Silva
    -------------------------------------
    WINET - Wireless Networks Laboratory
    Departamento de Ciencia da Computacao
    Universidade Federal de Minas Gerais

'''
# IMPORTS
import os
import csv
from datetime import datetime

# Years That Would be Analyzed
yearsOfAnalysis = [2017, 2018]

# ***ATTENTION***
# This Array Contains The FIRST NODE, LAST NODE and the NAME'S GROUP of All 
# the Types of Nodes in The FUTEBOL UFMG Testbed
nodes = [[11, 18, "usrps_vms"],
         [21, 28, "default_vms"],
         [31, 46, "raspberries"],
         [51, 58, "containers"],
         [60, 75, "telosb"],
         [80, 87, "telosb_vms"]]


# This Function Convert a Time in 'Hours:Minutes:Seconds' Format to a 
# 'Hours,Fractions Of Hours' Format
def convertTimeToFractions(groups):
    for group in groups:
        duration = group[1].split(":")
        durationInFraction = float(duration[0])
        durationInFraction += float(duration[1])/60
        durationInFraction += float(duration[2])/3600
        group[1] = round(durationInFraction, 2)

# Sum a Two Durations in 'Hours:Minutes:Seconds' Format
def sumDurations(init, final):
    init = init.split(":")
    final = final.split(":")
    init[2] = int(init[2]) + int(final[2])
    init[1] = int(init[1]) + int(final[1])
    init[0] = int(init[0]) + int(final[0])
    init[1] += int(init[2]/60)
    init[2] = init[2] - int(init[2]/60)*60
    init[0] += int(init[1]/60)
    init[1] = init[1] - int(init[1]/60)*60
    return str(init[0])+":"+str(init[1])+":"+str(init[2]) 

# Write Results in The File    
def writeGroupFile(groups, groupName):
    filePointer = open(str(groupName)+".csv", 'w')
    writer = csv.writer(filePointer, delimiter=',')
    
    writer.writerow(["Allocation Month","Total Time Of Allocation",
        "Nodes Alocated"])
    for group in groups:
        writer.writerow(group)

# Process File, Catching the Duration of the Allocations in a Given Date 
#   (Month+Year)
def processFile(node, filePointer, groups):
    line = filePointer.readline()
    while(line):
        allocationDate = datetime.strptime(line.split(",")[0], "%Y-%m-%d")
        duration = line.split(",")[1]
        month = allocationDate.month
        year = allocationDate.year

        date = str(year)+"/"+str(month)
        for group in groups:
            if(group[0] == date):
                group[1] = sumDurations(group[1], duration)
        line = filePointer.readline()

# MAIN
if __name__ == '__main__':
    # For Each Type of Node in Testbed,
    for node in nodes:
        firstNode = node[0]
        lastNode = node[1]
        typeOfNode = node[2]
        numOfNodes = lastNode - firstNode + 1
        currentNode = firstNode

        groups = [[0] * 3] * (len(yearsOfAnalysis)*12)
        i = j = 0
        # Create a Array That Will Contain a DATE (YEAR+MONTH), the SUM OF ALL 
        # ALLOCATIONS' DURATIONS and the NUM OF NODES IN THE TYPE.
        while(i<len(yearsOfAnalysis)):
            j = 0
            while(j<12):
                groups[(i*12)+j] = [str(yearsOfAnalysis[i])+"/"+str(j+1), "0:0:0", numOfNodes]
                j += 1
            i += 1
        # For Each Node,
        while(currentNode <= lastNode):
            # Confirm if The File Exists
            try:
                filePointer = open("node_"+str(currentNode), "r")
            except IOError, e:
                currentNode += 1
                continue
            # Process File
            processFile(currentNode, filePointer, groups)
            filePointer.close()
            os.remove("node_"+str(currentNode))
            currentNode += 1
        # Convert The Durations to 'Hours,Fractions Of Hours' Format
        convertTimeToFractions(groups)
        # Write Final Final.
        writeGroupFile(groups, typeOfNode);




                    
