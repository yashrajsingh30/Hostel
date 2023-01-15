import matplotlib.pyplot as plt
from pandas import *

# Define the data for the chart
data = read_csv("C:\\Users\\Slim5\\Downloads\\Hostel.csv")
c = data['City']
cities=c.tolist()
City=c.unique().tolist()


count=[0]*5
for i in cities:
    if i is City[0]:
        count[0]=count[0]+1
    if i is City[1]:
        count[1]=count[1]+1
    if i is City[2]:
        count[2]=count[2]+1
    if i is City[3]:
        count[3]=count[3]+1
    if i is City[4]:
        count[4]=count[4]+1
        
plt.figure(figsize=(10, 4))
plt.bar(City, count)

# Add axis labels
plt.xlabel('City')
plt.ylabel('No. of Hostels')
plt.title('HOSTEL GRAPH')

plt.savefig('chart.png')

