import sys
import matplotlib.pyplot as plt

value=[]

for i in range(1,4):
    value.append(float(sys.argv[i]))

labels=["Location", "Security", "Staff"]
plt.figure(figsize=(5,4))
colors=["magenta", "skyblue", "lawngreen"]
plt.pie(value, labels=labels, colors=colors)

plt.title('Features of hostel')


plt.savefig('pie2.png')