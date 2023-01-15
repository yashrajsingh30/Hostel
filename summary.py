import sys
import matplotlib.pyplot as plt
from pandas import *

# Define the data for the chart
data = read_csv("C:\\Users\\Slim5\\Downloads\\Hostel.csv")
c=float(sys.argv[1])
fig, ax = plt.subplots(figsize=(3, 6))
ax.bar('Summary', c)

# Set y-axis scale to 1 unit
ax.set_yticks(range(0, 11, 1))

ax.text(0,c,c)
plt.title('Summary Score')

plt.ylim(top=10)

plt.savefig("sum.png")
