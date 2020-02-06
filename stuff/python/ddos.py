import os
special_directories2 = ""

def main():
    website = input("Please input website you would like to hit: ")
    special_directories = input("Any directories in particular?: ")
    totalhits = int(input("How many times would you like to hit " + str(website) + "?: "))

    for i in range (0, totalhits):
        os.system("clear")
        if (special_directories != ""):
            os.system("curl http://" + website + "/" + special_directories + "/")
        else:
            os.system("curl http://" + website + "/")

if (__name__ == "__main__"):
    main() 