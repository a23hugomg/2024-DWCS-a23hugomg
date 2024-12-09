class BookNotAvailableException(Exception):
    pass
class BookNotFoundException(Exception):
    pass

class Book():
    def __init__(self, title, author, status):
        self.title = title
        self.author = author
        self.status = status
    
    def __str__(self):
        return f"Title: {self.title} Author: {self.author} Status: {self.status}"
    
class Library():
    def __init__(self, books):
        self.books = books
        
    def listAvailable(self):
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
                    print(f"El libro ha sido prestado: {book}")
                    return
        raise BookNotFoundException("No existe ese libro")
        
    def returnBook(self,title):
        for book in self.books:
            if book.title == title:
                book.status = True
                print(f"El libro ha sido devuelto: {book}")
                

book1 = Book("book1","book1", True)
book2 = Book("book2","book2", False)
book3 = Book("book3","book3", True)

books = {book1,book2,book3}

library = Library(books)

library.listAvailable()

try:
    library.borrowBook("book2")
except BookNotFoundException as e:
    print(e)
except BookNotAvailableException as e:
    print(e)
    
library.listAvailable()

try:
    library.returnBook("book1")
except BookNotFoundException as e:
    print(e)
except BookNotAvailableException as e:
    print(e)
    
library.listAvailable()