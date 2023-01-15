import sys
import matplotlib.pyplot as plt
from pandas import *

# Define the data for the chart
c=float(sys.argv[1])
fig, ax = plt.subplots(figsize=(3, 6))
ax.bar('Value', c)

# Set y-axis scale to 1 unit
ax.set_yticks(range(0, 11, 1))

ax.text(0,c,c)
plt.title('Value for Money')

plt.ylim(top=10)

plt.savefig("value.png")
