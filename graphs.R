library(ggplot2)

usrps <- read.csv(file="/home/fernandaars/log_analysis/usrps_vms.csv")
container <- read.csv(file="/home/fernandaars/log_analysis/containers.csv")
default <- read.csv(file="/home/fernandaars/log_analysis/default_vms.csv")
raspberries <- read.csv(file="/home/fernandaars/log_analysis/raspberries.csv")
telosb <- read.csv(file="/home/fernandaars/log_analysis/telosb.csv")
telosb_vm <- read.csv(file="/home/fernandaars/log_analysis/telosb_vms.csv")

complete_data <- data.frame(usrps[,1])

complete_data["usrps"] <- usrps[,2]
complete_data["containers"] <- container[,2]
complete_data["default"] <- default[,2]
complete_data["raspberries"] <- raspberries[,2]
complete_data["telosb"] <- telosb[,2]
complete_data["telosb_vms"] <- telosb_vm[,2]

View(complete_data)

xAxis <- complete_data[,1]
yAxis1 <- complete_data[, 2]
yAxis2 <- complete_data[, 3]
yAxis3 <- complete_data[, 4]
yAxis4 <- complete_data[, 5]
yAxis5 <- complete_data[, 6]
yAxis6 <- complete_data[, 7]

xAxis = seq(as.Date("2017-01-01"), by="1 month", length.out=24)
graph <- ggplot(complete_data, aes(xAxis), group=1) + 
  geom_line(aes(y = yAxis1, colour = "VM's with USRP'S"), group=1) +
  geom_line(aes(y = yAxis3, colour = "Default VM's"), group=1) + 
  geom_line(aes(y = yAxis4, colour = "Raspberries PI"), group=1) + 
  geom_line(aes(y = yAxis2, colour = "Containers"), group=1) + 
  geom_line(aes(y = yAxis5, colour = "TelosB Sensors"), group=1) + 
  geom_line(aes(y = yAxis6, colour = "TelosB VM's"), group=1) 

print(graph + labs(title= "Usage of FUTEBOL UFMG Testbed in Hours",
                   y="Total of Hours", x = "Month", colour = "Types of Nodes"))