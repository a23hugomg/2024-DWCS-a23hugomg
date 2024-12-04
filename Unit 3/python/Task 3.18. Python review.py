class BookNotAvailableException(Exception):
    def __init__(self, message):
        self.message = message
        
    def __str__(self):
        return self.message
    
class BookNotFoundException(Exception):
    def __init__(self, message):
        self.message = message
        
    def __str__(self):
        return self.message

class Book():
    def __init__(self, title, author, status=True):
        self.title = title
        self.author = author
        self.status = status
        
    def __str__(self):
        availability = "Available" if self.status else "Borrowed"
        return f"Title: {self.title}, Author: {self.author}, Status: {availability}"    
        
class Library():
    def __init__(self, books):
        self.books = books

    def listBooks(self):
        for book in self.books:
            if book.status == True:
                print(book)
            
    def borrowBook(self, title):
        for book in self.books:
            if book.title == title:
                if book.status == False:
                    raise BookNotAvailableException("El libro está prestado")
                else:
                    book.status = False
                    print(f"El libro {book.title} ha sido prestado")
                    return
        raise BookNotFoundException("El libro no existe")
            
    def returnBook(self, title):
        for book in self.books:
            if book.title == title:
                if book.status == False:
                    book.status = True
                    print(f"El libro {book.title} ha sido devuelto.")
                    return
        raise BookNotFoundException("El libro no existe")



book1 = Book("Book1", "1", True)
book2 = Book("Book2", "2", False)
book3 = Book("Book3", "3", True)

books = []
books.append(book1)
books.append(book2)
books.append(book3)

library = Library(books)

library.listBooks()

try:
    library.borrowBook("Book3")
except BookNotFoundException as e:
    print(e)
except BookNotAvailableException as e:
    print(e)
    
try:
    library.returnBook("Book3")
    library.returnBook("Book2")
    library.returnBook("Book1")
except BookNotFoundException as e:
    print(e)
    
    
library.listBooks()