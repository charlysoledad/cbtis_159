import numpy as np
import matplotlib.pyplot as plt
import math

# f(theta)
def f_t(theta):
	theta = (theta**2)*math.pi / 180
	y = ((3*np.cos(theta)) / 4)
	#print("X"+str(theta))
	#print("Y"+str(y))
	return y

def f_x(x):
	y = x**2
	return y

#Rieman
def riemannplot(f, a, b, ra, rb, n, at):
    atenuacion = at
    x = np.arange(a, b+atenuacion, atenuacion)
    
    inter = float(at / 2)
    punto_m = np.arange(ra, rb, inter)
    #pm = punto_medio(pun)

    plt.plot(x, f(x) , marker='o',linewidth=1 ,color='b', label = "f(cos($\Theta$**2) / 4)")
    plt.fill_between(inter, f(x),where=x < rb+atenuacion, color='blue')

    delta_x = (rb-ra) / n
    riemannx = np.arange(ra, rb, delta_x)
    riemanny = f(riemannx)
    riemann_sum = sum(riemanny*delta_x)

    plt.bar(riemannx,riemanny,width=inter,alpha=0.5,facecolor='orange')

    plt.xticks(np.arange(a, b+atenuacion, atenuacion))
    plt.yticks(np.arange(-1,1,.25))
    plt.xlabel('$\Theta$')
    plt.ylabel('$f(\Theta)$')
    plt.title('f($\Theta$) = 3cos($\Theta^{2}$) / 4')
    plt.figtext(0.1,0.02, "Suma de Riemann: " + str(riemann_sum), color ='r')

    
    print(str(type(atenuacion)) + " atenuacion: " + str(atenuacion))
    print(str(type(x)) + " x: " + str(x))
    print(str(type(inter)) + " inter: " + str(inter))
    print(str(type(punto_m)) + " Punto m: " + str(punto_m))
    print(str(type(delta_x)) + " delta_x: " + str(delta_x))
    print(str(type(riemannx)) + " riemannx: " + str(riemannx))
    print(str(type(riemanny)) + " riemanny: " + str(riemanny))
    print(str(type(riemann_sum)) + " riemann_sum: " + str(riemann_sum))
    plt.show()

riemannplot(f_t,0,360,0,225, 100, 45)
#riemannplot(f_x,-2,5,lim1,lim2, 4, atenuacion)