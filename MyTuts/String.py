# Author: OMKAR PATHAK

# NOTE: This tutorial is based for Python 3

# In this example we would see some operations that can be performed
# on Python data type: Strings

myString = 'hello'						# Assigning a string to a variable

# h => 0
# e => 1
# l => 2
# l => 3
# o => 4

print(myString[0], myString[1])
print(myString[2] + 'abc')

# String Operations

result = myString.capitalize()			# capitalize the first letter of the string
print(myString)							# 'Hello'

result = myString.count('l')			# count the occurances of the letter l
print(myString)							# 2

result = myString.islower()				# check if the string contains ALL lowercase letters
print(result)							# True

result = myString.replace('l', 'a')		# replace all occurances of 'l' with 'm'
print(result)

result = myString.index('h') 			# check the index for letter 'h' in the string
print(result)							# 0

result = myString.upper()				# change the WHOLE string to uppercase
print(result)

result = myString.lower()				# change the WHOLE string to lowercase
print(result)

# There are many such operations
# For full list of operations fire below command at the interactive shell of Python
# COMMAND: dir(str)