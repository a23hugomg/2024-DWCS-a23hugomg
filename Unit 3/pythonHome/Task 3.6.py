class Calculator:
	numberOfObjects = 0

	def __init__(self, num1= None, num2= None):
		if num1 == None or num2 == None:
			num1 = 0
			num2 = 0
		if type(num1) is int and type(num2) is int:
				self.num1 = num1
				self.num2 = num2
				self.numberOfObjects =+1
		else:
				raise Exception("The type of the numbers must be int")

	def __str__(self):
		return f"Num1: {self.num1} Num2: {self.num2}"

	def suma(self):
		result = self.num1 + self.num2
		return result
 
try:
	firstCalcule = Calculator()
	firstCalcule.num1 = 2
	firstCalcule.num2 = 3
	print(f"Num1: {firstCalcule.num1} Num2: {firstCalcule.num2}")
except Exception as e:
	print(e)

try:
	secondCalcule = Calculator(3,5)
	print(secondCalcule)
	print(secondCalcule.suma())
except Exception as e:
	print(e)
  