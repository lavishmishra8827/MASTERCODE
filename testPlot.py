from sklearn import tree

import numpy as np

import csv

x = []
y = []
z = []
file_reader= open('CandidateDetails.csv', "rt")
read = csv.reader(file_reader)
for row in read :
      interview_type = (row)[6]
      experience = row[3]
      if not (experience.isdigit() ):
        continue
      inter_val = 0
      if(interview_type == "Good"):
          inter_val = 5
      elif interview_type == "Poor" :
          inter_val = 1
      else:
          inter_val = 3

      result = (row)[7]
      if(result == "Selected"):
          boolean_result = 1
      else:
          boolean_result = 0
      x.append([inter_val,float(experience)])
      y.append(boolean_result)
      z.append([float(experience)])
      print inter_val ,boolean_result, experience


print x,y,len(x),len(y)

exp_status = 0
inter_status = 0

from sklearn.cross_validation import train_test_split
x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.50, random_state=42)

clf = tree.DecisionTreeClassifier()
print z,y
clf = clf.fit(x, y)
inter_status = clf.score(x_test,y_test,sample_weight=None)
print inter_status
# print clf.predict([5,6],check_input=True)

# z_train, z_test, y_train, y_test = train_test_split(z, y, test_size=0.20, random_state=42)
# clf = tree.DecisionTreeClassifier()
# clf = clf.fit(z, y)
# exp_status = clf.score(z_test,y_test,sample_weight=None)
#print x_train