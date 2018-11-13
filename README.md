# .: log_analysis :.

Python Scripts to Create the Statistics About the Usage of The FUTEBOL UFMG Testbed

## First Scripts - individual_results.py

* This script generate the durations of the allocations for each individual node, creating files named as 'node_#'.
* Usage:

```bash  
python python individual_results.py <Complete Path of First Log File> <Complete Path of Last Log File> 
```  

## Second Script - group_results.py

* This script generate the durations of the allocations for each type of nodes, using the files created by the previous script and creating files named as 'name_of_the_group.csv' as result.
* ATTENCION! To adapt the script to another testbed, the following variables need to be changed to mirror the Types of the Nodes Available and the Amount of Logs:

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
python python group_results.py

```  