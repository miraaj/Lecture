Q1: How many times did it occur in the trial, that exactly two 6s were rolled after each other? For example, in sequence 56611166626634416 it occurred twice, that exactly two 6s were thrown after each other.
Answer:

s = '56611166626634416'
list_item =[]
lists = []
count = 0
final_count = 0
maxc = 0
for i in range(len(s)):
    if(s[i]== '6'):
        count = count + 1
        if maxc < count:
            maxc = count
            list_item.append(maxc)
    
    else:
        count = 0
        maxc = 0


count = 0
maxc = 0
    
for i in range(len(list_item)):
    if i == len(list_item)-1 and list_item[i] == 2:
        count = count + 1
        if maxc < count:
            maxc = count
    elif(list_item[i] == 2 and list_item[i] > list_item[i+1]):
        count = count + 1
        if maxc < count:
            maxc = count

print(maxc)


***************************************************************************************************************************
Q2. Find the length of the longest subsequence of successive rolls, in which the value 6 does not occur. (This number can be zero, if only 6s were thrown.) For example, in the trial 66423612345654 the longest subsequence of successive rolls in which the value 6 does not occur is 12345. Its length is 5.

Answer:

s = '66423612345654'
list_item =[]
lists = []
count = 0
maxc = 0
for i in range(len(s)):
    if(s[i]!= '6'):
        count = count + 1
        if maxc < count:
            maxc = count
    else:
        count = 0
   
    
print(maxc)


*****************************************************************************************************************************
Q3. In this exercise we consider the subsequences of the trial. Only subsequences of 10 successive values are taken into account. Find the maximum of the sum of the values in the possible subsequences with length of ten.
For example, trial 21111111116 has two subsequences with length ten: 2111111111 and 1111111116. The sum of the values in the first subsequence is 11, the sum of the values in the second sequence is 15. This is why the correct answer is 15.
If the length of the trial is less than 10, the answer has to be 0.

Another example: let us suppose our sequence of rolls is 66423612345654. It has five contiguous subsequences with length 10:
6642361234
 6423612345
  4236123456
   2361234565
    3612345654
The sum of the elements in the possible subsequences are: 37, 36, 36, 37 and 39. In this case the correct answer is 39. 3+6+1+2+3+4+5+6+5+4=39


Answer
list_item =[]
sums = 0
max_sum = 0


s1='66423612345654'
for i in range(len(s1)):
    if(len(s1[i:i+10]) == 10):
       list_item.append(s1[i:i+10])
    

for item in list_item:
    if(len(item) == 10):
        for i in range(len(item)):
            sums = int(item[i]) + sums
    if max_sum < sums:
        max_sum = sums
    sums = 0

print(max_sum)
            
            
*****************************************************************************************************************************
Q4. We shall call a sequence of successive rolls in the trial a lucky series, if the sequence contains only 5s and 6s. For example 6556665 is a lucky series, with a length of 7.
Find out, which is the most frequent length for lucky series. If there are more than one "most frequent" lucky series lengths, print the longest. If there are no lucky series in the trial, print zero.
Be aware. We are not interested in the most frequent lucky series. The four lucky series 656, 555, 556 and 666 are equivalent for us, all of them are lucky series of length three. We are looking for the most frequent length of lucky series.
For example, in trial 5533661656, the series 656 is the longest lucky series. But there is only one lucky series of lenght three in the trial. 55 and 66 are also lucky series. This is why the correct answer is 2. In trial 456116513656124566 both the lucky series with length of 2 and 3 occur twice, there is a tie between them. Now the length of the longest (that is 3) should be printed. Examples example1 and example2 are aimed to make this situation clear. 



Answer:

input_trial = '56611166626634416'


different_length_lucky_number = []
count_lucky_number = 0
result_lucky_number_five_six = 0


for i in range(len(input_trial)):
    if int(i) == int((len(input_trial)-1)) and (input_trial[i] == '6' or input_trial[i] == '5'):
        count_lucky_number = count_lucky_number+1
        if result_lucky_number_five_six < count_lucky_number:
            result_lucky_number_five_six = count_lucky_number
        different_length_lucky_number.append(result_lucky_number_five_six)
        
    elif(input_trial[i] == '6' or input_trial[i] == '5'):
        count_lucky_number = count_lucky_number + 1
        if result_lucky_number_five_six < count_lucky_number:
            result_lucky_number_five_six = count_lucky_number    
          
    else:
        different_length_lucky_number.append(result_lucky_number_five_six)
        result_lucky_number_five_six = 0
        count_lucky_number = 0
        
result_lucky_number_five_six = 0
result_lucky_number_five_six = max(set(different_length_lucky_number),key=different_length_lucky_number.count) 
if(result_lucky_number_five_six == 0):
    #max(different_length_lucky_number) also gives the same result
    for i in range(len(different_length_lucky_number)):
        if(result_lucky_number_five_six < different_length_lucky_number[i]):
            result_lucky_number_five_six = different_length_lucky_number[i]
else:
    result_lucky_number_five_six = result_lucky_number_five_six

print(result_lucky_number_five_six)








