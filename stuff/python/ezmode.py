import os
from datetime import datetime
import string
import random
randomletters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'

#import sys
#sys.setrecursionlimit(10000000)
#===================================

def makeaddir(path):
    try:
        os.mkdir(path)
    except OSError:
        print ("Directory already exsists.")#("Creation of the directory %s failed" % path, "\n this might be becuase it already exsits")
    else:
        print ("Successfully created the directory %s!" % path)
    date = datetime.today().strftime('%Y-%m-%d')
    try:
        os.mkdir(path + date)
    except OSError:
        print ('Directory "' + date + '" already exsists.')#("Creation of the directory %s failed" % path, "\n this might be becuase it already exsits")
    else:
        print ("Successfully created the directory %s!" % date)

def rmfileifexsista(path, date):
    date2 = datetime.today().strftime('%Y-%m-%d')
    dafile = path + "/" + str(date2) + "/" + str(date) + ".txt"
    #if os.path.isfile(dafile):
        #os.system("rm " + dafile)
        #os.system("touch " + dafile)
        #print("re-wrote the file: " + str(date) + ".txt.")
    #else:
    os.system("touch " + dafile)
    print("Made the file: " + str(date) + ".txt.")
        
def main(path, today):
    date = datetime.today().strftime('%Y-%m-%d')
    makeaddir(path)
    rmfileifexsista(path, today)
    f = open(path + "/" + str(date) + "/" + str(today) + ".txt", "w+")
    i = 0
    while i < 2 ** 16:
        #f.write(str(i) + ", ")
        f.write(random.choice(randomletters))
        i += 1
    f.close()
    print("Success, This program will now close!")

def main2():
	path = os.getcwd()
	print ("The current directory is %s" % path + "/.")

if (__name__ == "__main__"):
    today = datetime.today().strftime('%H:%M:%S')
    path = os.getcwd() + "/a_folder/"
    os.system("clear")
    main2()
    main(path, today)
