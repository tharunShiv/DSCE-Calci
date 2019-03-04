import pandas as pd

students = pd.read_excel('doc.xls', 10)  
stud = students[6:]     # getting only the student marks

iat1 = stud.iloc[:, 2:8]   # marks of iat1 only
iat2 = stud.iloc[:, 9:15]  # marks of iat2 only
iat3 = stud.iloc[:, 16:22]  # marks of iat3 only

coiat1 = students.iloc[0, 2:8].reshape(1, 6)   # the cos of each question for iat 1
coiat2 = students.iloc[0, 9:15].reshape(1, 6)  # the cos of each question for iat 2
coiat3 = students.iloc[0, 16:22].reshape(1, 6)  # the cos of each question for iat 3

# total of iat1
coTotalDict1 = dict()  
# count of iat1
coCountDict1 = dict()
coTotalDict2 = dict()
coCountDict2 = dict()
coTotalDict3 = dict()
coCountDict3 = dict()

coStudentMarks = dict()  # the marks of respective cos

cols = [0, 1, 2, 3, 4, 5, 0, 1, 2, 3, 4, 5, 0, 1, 2, 3, 4, 5] 
z = 0

for x in cols:
    if z < 6: 
        z += 1
        print(coiat1[0][(x)] + "\n\n")
        print(len(stud))
        for y in range(len(stud)):
            if coiat1[0][x] in coTotalDict1 and str(iat1.iloc[y, x]) != 'nan': 
                print(coTotalDict1[coiat1[0][x]]) 
                coTotalDict1[coiat1[0][x]] += iat1.iloc[y, x]
                coCountDict1[coiat1[0][x]] += 1
                coStudentMarks[coiat1[0][x]].append(iat1.iloc[y, x])
            elif str(iat1.iloc[y, x]) != 'nan':
                coTotalDict1[coiat1[0][x]] = 0
                coTotalDict1[coiat1[0][x]] += iat1.iloc[y, x]
                coCountDict1[coiat1[0][x]] = 1
                if coiat1[0][x] not in coStudentMarks:
                    coStudentMarks[coiat1[0][x]] = [iat1.iloc[y, x]]
                else:
                    coStudentMarks[coiat1[0][x]].append(iat1.iloc[y, x])
    elif z < 13:
        z += 1
        print(coiat2[0][x] + "\n\n")
        print(len(stud))
        for y in range(len(stud)):
            if coiat2[0][x] in coTotalDict2 and str(iat2.iloc[y, x]) != 'nan': 
                print(coTotalDict2[coiat2[0][x]]) 
                coTotalDict2[coiat2[0][x]] += iat2.iloc[y, x]
                coCountDict2[coiat2[0][x]] += 1
                coStudentMarks[coiat2[0][x]].append(iat2.iloc[y, x])
            elif str(iat2.iloc[y, x]) != 'nan':
                coTotalDict2[coiat2[0][x]] = 0
                coTotalDict2[coiat2[0][x]] += iat2.iloc[y, x]
                coCountDict2[coiat2[0][x]] = 1    
                if coiat2[0][x] not in coStudentMarks:
                    coStudentMarks[coiat2[0][x]] = [iat2.iloc[y, x]]
                else:
                    coStudentMarks[coiat2[0][x]].append(iat2.iloc[y, x])
    else:
        print(coiat3[0][x] + "\n\n")
        print(len(stud))
        for y in range(len(stud)):
            if coiat3[0][x] in coTotalDict3 and str(iat3.iloc[y, x]) != 'nan': 
                print(coTotalDict3[coiat3[0][x]]) 
                coTotalDict3[coiat3[0][x]] += iat3.iloc[y, x]
                coCountDict3[coiat3[0][x]] += 1
                coStudentMarks[coiat3[0][x]].append(iat3.iloc[y, x])
            elif str(iat3.iloc[y, x]) != 'nan':
                coTotalDict3[coiat3[0][x]] = 0
                coTotalDict3[coiat3[0][x]] += iat3.iloc[y, x]
                coCountDict3[coiat3[0][x]] = 1 
                if coiat3[0][x] not in coStudentMarks:
                    coStudentMarks[coiat3[0][x]] = [iat3.iloc[y, x]]
                else:
                    coStudentMarks[coiat3[0][x]].append(iat3.iloc[y, x])
        
print(coTotalDict1)
print(coCountDict1)  
print(coTotalDict2)
print(coCountDict2)  
print(coTotalDict3)
print(coCountDict3)  

# finding the final total dictionary
finalTotalDict = dict()

for x in coTotalDict1.keys():
    if x in finalTotalDict:
        finalTotalDict[x] += coTotalDict1[x] 
    else:
        finalTotalDict[x] = coTotalDict1[x]
        
for x in coTotalDict2.keys():
    if x in finalTotalDict:
        finalTotalDict[x] += coTotalDict2[x] 
    else:
        finalTotalDict[x] = coTotalDict2[x]
        
for x in coTotalDict2.keys():
    if x in finalTotalDict:
        finalTotalDict[x] += coTotalDict3[x] 
    else:
        finalTotalDict[x] = coTotalDict3[x]
        
# finding the final count dictionary
finalCountDict = dict()

for x in coCountDict1.keys():
    if x in finalCountDict:
        finalCountDict[x] += coCountDict1[x] 
    else:
        finalCountDict[x] = coCountDict1[x]
        
for x in coCountDict2.keys():
    if x in finalCountDict:
        finalCountDict[x] += coCountDict2[x] 
    else:
        finalCountDict[x] = coCountDict2[x]
        
for x in coCountDict2.keys():
    if x in finalCountDict:
        finalCountDict[x] += coCountDict3[x] 
    else:
        finalCountDict[x] = coCountDict3[x]
        
# finding the average 
finalAvgDict = dict()

for x in finalTotalDict:
    finalAvgDict[x] = finalTotalDict[x] / finalCountDict[x]
    
# finding the course attainment
coAttainment = dict()

import math 

for co in coStudentMarks:
    nStudentCount = 0 #number of student
    print("Avg is", finalAvgDict[co])
    for x in range(len(coStudentMarks[co])):
        if coStudentMarks[co][x] >= math.floor(finalAvgDict[co]):
            nStudentCount+=1
    print(nStudentCount)
    
    #finding the percentage of students
    percentage = nStudentCount/math.floor(finalCountDict[co])
    print(co, " percentage = ", percentage, "\n")
    
    '''
    For eg, if you get 70% as an average mark for that question, find the count of students who scored 70% marks and above.
    
    If 80% or more students have scored 70% of marks for that particular question or here CO1 for eg, then we attain level 3.

    If 70% or more students have scored 70% of marks for that particular question or here CO1 for eg, then we attain level 2.  

    If 60% or more students have scored 70% of marks for that particular question or here CO1 for eg, then we attain level 1
    '''
    
    if percentage >= 0.80:
        coAttainment[co] = 3
    elif percentage >= 0.70:
        coAttainment[co] = 2
    else:
        coAttainment[co] = 1
        
        
    
    
    
    
    
    
    
    