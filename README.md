# Find-the-chocolate-sweetness
Find the number of chocolates that have both sweetness greater than X and lifetime greater than Y

You are given the following details:
- N denoting the number of chocolates
- A[i] denoting the sweetness of chocolate that you have
- B[i] denoting the lifetime (expiry duration) of chocolate that you have
- Q queries in which each query contains two integers and

For each query, your task is to find the number of chocolates that have both sweetness greater than X and lifetime greater than Y.

**Example**
If A = [4,1,23,12,3] , B = [2,4,5,1,2]

For query X = 11 , Y = 2. There exists only 1 chocolate i.e. at index 3 with sweetness 23 and lifetime 5 . The chocolate at index 4 has sweetness 12 which is greater than X = 11
but the lifetime i.e. 1 is less than Y = 2.

**Function Description**
Create a function to perform the query. The function takes the following 5 parameters and returns an integer array denoting the answer of Q queries.

- N : Represents the number of chocolates
- A : Represents the sweetness of chocolate
- B : Represents the lifetime of chocolate
- Q : Represents the number of queries
- query : Represents the query in form of two space separated integers X and Y.

**Input format**

- The first line contains an integer N denoting the number of chocolates that you have.
- The second line contains N space-separated integers A[i] denoting the sweetness of the i​ th​ chocolate.
- The third line contains space-separated integers denoting the lifetime of the chocolate.
- The next line contains an integer Q denoting the number of queries
- Each of the next Q lines contains two space-separated integers X and Y

**Output format**
For each query, print the number of chocolates that have both sweetness greater than X and lifetime greater than Y.

**Sample Input file contents:**
- 5
- 16 11 10 20 18
- 11 9 2 2 4
- 5
- 3 20
- 4 5
- 9 1
- 4 6
- 8 4

**Sample Output:**
0 2 5 2 2

