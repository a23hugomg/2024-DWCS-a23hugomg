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
            print(book)
            
    def borrowBook(self, title):
        try:
            for book in self.books:
                if book == title:
                    self.books.remove(book)
                    print(f"El libro {book} ha sido eliminado.")
                    return 
                else:
                    pass
                raise BookNotAvailableException("El libro no existe")
        except BookNotAvailableException as error:
            print(error)
            
    def returnBook(self, title):
        try:
            for book in self.books:
                if book == title:
                    print(book)
                    return
                else:
                    pass
                raise BookNotFoundException("El libro no existe")
        except BookNotFoundException as e:
            print(e)
    