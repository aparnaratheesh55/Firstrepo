def simple(p,t,r):
    si=(p*t*r)/100
    print("simple interest is",si)
    return si
age=int(input("enter age please"))
p=int(input("enter principle amount"))
t=int(input("enter the number of years"))

if(age>70):
    r=12
if(age<70):
    r=10
simple(p,t,r)
        