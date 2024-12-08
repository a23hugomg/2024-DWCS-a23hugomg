class Alien:
    numberOfAliens = 0

    def __init__(self,name):
        self.name = name
        Alien.numberOfAliens +=1
        
    @classmethod
    def getNumberOfAliens(cls):
        return cls.numberOfAliens
        
alien1 = Alien("paco")
alien2 = Alien("manu")
alien3 = Alien("hjkhdfa")

print(f"Number of aliens created: {Alien.getNumberOfAliens()}")
