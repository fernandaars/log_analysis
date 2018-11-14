library(ggplot2)
library(lubridate)

usrps <- read.csv(file="~/log_analysis/usrps_vms.csv")
container <- read.csv(file="~/log_analysis/containers.csv")
default <- read.csv(file="~/log_analysis/default_vms.csv")
raspberries <- read.csv(file="~/log_analysis/raspberries.csv")
telosb <- read.csv(file="~/log_analysis/telosb.csv")
telosb_vm <- read.csv(file="~/log_analysis/telosb_vms.csv")

complete_data <- data.frame(usrps[,1])

complete_data["usrps"] <- usrps[,2]/usrps[,3]
complete_data["containers"] <- container[,2]/container[,3]
complete_data["default"] <- default[,2]/default[,3]
complete_data["raspberries"] <- raspberries[,2]/raspberries[,3]
complete_data["telosb"] <- telosb[,2]/telosb[,3]
complete_data["telosb_vms"] <- telosb_vm[,2]/telosb_vm[,3]

xAxis = seq(as.Date("2017-01-01"), by="1 month", length.out=nrow(complete_data))
numberOfHours <- days_in_month(xAxis)*24

yAxis1 <-(complete_data[, 2]/numberOfHours)
yAxis2 <-(complete_data[, 3]/numberOfHours)
yAxis3 <-(complete_data[, 4]/numberOfHours)
yAxis4 <-(complete_data[, 5]/numberOfHours)
yAxis5 <-(complete_data[, 6]/numberOfHours)
yAxis6 <-(complete_data[, 7]/numberOfHours)

graph <- ggplot(complete_data, aes(xAxis), group=1) + 
  geom_line(aes(y = yAxis1, colour = "VM's with USRP'S"), group=1) +
  geom_line(aes(y = yAxis2, colour = "Containers"), group=1) +
  geom_line(aes(y = yAxis3, colour = "Default VM's"), group=1) + 
  geom_line(aes(y = yAxis4, colour = "Raspberries PI"), group=1) + 
  geom_line(aes(y = yAxis5, colour = "TelosB Sensors"), group=1) +
  geom_line(aes(y = yAxis6, colour = "TelosB VM's"), group=1) + 
  scale_y_continuous(labels = scales::percent)

print(graph + labs(title= "Medum Usage of FUTEBOL UFMG Testbed by Type of Node",
                   y="Percentage of Hours of Use i a Month", x = "Month OF Analysis", colour = "Types of Nodes"))
