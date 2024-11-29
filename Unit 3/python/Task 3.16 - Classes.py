class Person():
    def __init__(self, name, email, telephone):
      self.name = name
      self.email = email
      self.telephone = telephone
    
    def __str__(self):
        return f"Name: {self.name}\nEmail: {self.email}\nTelephone: {self.telephone}"
  
class Product():
    def __init__(self, name, description, price, image):
      self.name = name
      self.description = description
      self.price = price
      self.image = image
      
    def __str__(self):
					return f"Name: {self.name}\nDescription: {self.description}\nPrice: ${self.price:.2f}\nImage: {self.image}"

class Order():
		def __init__(self, date, products, client):
			self.date = date
			self.products = products
			self.client = client
  
		def getTotal(self):
					return sum(product.price for product in self.products)
   
		def __str__(self):
						products_str = "\n\n".join(str(product) for product in self.products)
						return f"Date: {self.date}\nProductos:\n{products_str}\n\nCliente:\n{self.client}\n\nPrecio Total: {self.getTotal()}€"


cliente = Person("Marcos","marcos@email.com", 678334590)

product1 = Product("Laptop", "High-performance laptop", 500, "laptop.jpg")
product2 = Product("Mouse", "Wireless mouse", 20, "mouse.jpg")
product3 = Product("Keyboard", "Mechanical keyboard", 29.99, "keyboard.jpg")

products = [product1, product2, product3]
order = Order("2024-11-27", products, cliente)

print(order)
