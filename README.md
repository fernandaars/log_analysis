# .: log_analysis :.

Python Scripts to Create the Statistics About the Usage of The FUTEBOL UFMG Testbed

## First Scripts - individual_results.py

* This script generate the durations of the allocations for each individual node, creating files named as 'node_#'.
* ATTENTION! This script uses the Coordinator logs, found at the folder coordinator/coordinator-logs/date. If your testbed doesn't use the Software Coordinator, but have logs of the sql queries made during allocations, please send me an e-mail at fernandaaprsilva@gmail.com and i will try to help you to adapt the scripts. 

* Usage:

```bash  
python individual_results.py <Complete Path of First Log File> <Complete Path of Last Log File> 
```  

## Second Script - group_results.py

* This script generate the durations of the allocations for each type of nodes, using the files created by the previous script and creating files named as 'name_of_the_group.csv' as result.
* ATTENTION! To adapt the script to another testbed, the following variables need to be changed to mirror the Types of the Nodes Available and the Amount of Logs:

```python
yearsOfAnalysis = [2017, 2018]

nodes = [[11, 18, "usrps_vms"],
         [21, 28, "default_vms"],
         [31, 46, "raspberries"],
         [51, 58, "containers"],
         [60, 75, "telosb"],
         [80, 87, "telosb_vms"]]
```

* Usage:

```bash  
python group_results.py

```  

## Other Files

* [graph.R, graph1.R]: script in R language to generate graph.png and graph1.png
* [usrps_vms.csv, containers.csv, default_vms.csv, raspberries.csv, telosb.csv, telosb_vms.csv, usrps_vms.csv]: files samples generated by group_results.py and that are used to make graph.png and graph1.png
