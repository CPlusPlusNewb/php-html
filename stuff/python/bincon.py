#bincon_loop.py  pn
# d(dividend), q(quotent), r(remainder)
#================================
n = int(input("Input an interger < 256: "))
dnumer = 128
#"we want to get ones or zeros.. ones or zeros"
q = int(n / dnumer)
r = int(n % dnumer)
print ("quotent", end = " = ")
print (q, end = ", ")
print ("remainder", end = " = ")
print (r)
n = r

#the original statment seperator

#div64===========================
dnumer = int(dnumer / 2)
q = int(n / dnumer)
r = int(n % dnumer)
print ("quotent", end = " = ")
print (q, end = ", ")
print ("remainder", end = " = ")
print (r)
n = r
#div32===========================
dnumer = int(dnumer / 2)
q = int(n / dnumer)
r = int(n % dnumer)
print ("quotent", end = " = ")
print (q, end = ", ")
print ("remainder", end = " = ")
print (r)
n = r
#div16===========================
dnumer = int(dnumer / 2)
q = int(n / dnumer)
r = int(n % dnumer)
print ("quotent", end = " = ")
print (q, end = ", ")
print ("remainder", end = " = ")
print (r)
n = r
#div8============================
dnumer = int(dnumer / 2)
q = int(n / dnumer)
r = int(n % dnumer)
print ("quotent", end = " = ")
print (q, end = ", ")
print ("remainder", end = " = ")
print (r)
n = r
#div4============================
dnumer = int(dnumer / 2)
q = int(n / dnumer)
r = int(n % dnumer)
print ("quotent", end = " = ")
print (q, end = ", ")
print ("remainder", end = " = ")
print (r)
n = r
#div2============================
dnumer = int(dnumer / 2)
q = int(n / dnumer)
r = int(n % dnumer)
print ("quotent", end = " = ")
print (q, end = ", ")
print ("remainder", end = " = ")
print (r)
n = r
#div1============================
dnumer = int(dnumer / 2)
q = int(n / dnumer)
r = int(n % dnumer)
print ("quotent", end = " = ")
print (q, end = ", ")
print ("remainder", end = " = ")
print (r)
n = r
