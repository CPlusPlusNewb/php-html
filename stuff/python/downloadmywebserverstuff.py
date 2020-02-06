import os
import subprocess
import socket
import getpass

#code from noah mcgee, modified to work with my code, thanks :)
def otherting():
	b = input("read readme.md? (y/n): ")
	if (b == "Y" or b == "y"):
		os.system("more README.md")
	elif (b == "N" or b == "n"):
		exit()
	else:
		run()

def run(dapath):
	#print ("\n")
	a = input ("Download? (Y/N): ")
	if (a == "Y" or a == "y"):
		os.system("git clone https://github.com/CPlusPlusNewb/CPlusPlusNewb.github.io")#thanks noah for this code, with some modifications to work for what i need
		os.system("cd CPlusPlusNewb.github.io; mv * ../; cd ..; rm CPlusPlusNewb.github.io/ -dR;")
		otherting()
	elif (a == "N" or a == "n"):
		exit()
	else:
		run()

if (__name__ == "__main__"):
	path = os.getcwd()
	print ("The current directory is %s" % path + "/")#this is from my project reading and writing.
	run(path)
