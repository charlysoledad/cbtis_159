import numpy as np
import matplotlib.pyplot as plt
import math

degrees_int = 15

# f(theta)
def f(theta):
	theta = (theta**2)*math.pi / 180
	y = ((3*np.cos(theta)) / 4)
	#print("X"+str(theta))
	#print("Y"+str(y))
	return y

lim1 = input("Ingrese el limite 1: ")
lim2 = input("Ingrese el limite 2: ")
n = input("Ingrese la cantidad de rectangulos: ")
atenuacion = input("Ingrese la separacion del eje x: ")

#Rieman
def riemannplot(f, a, b, ra, rb, n, at):
    # f es la funcion -
    # a y b son los limites del eje x para graficar la funcion f
    # ra y rb son los limites del intervalo en el eje x del que queremos calcular la suma
    # n es el numero de rectangulos que calcularemos

    atenuacion = at
    x = np.arange(a, b+atenuacion, atenuacion)
    plt.plot(x, f(x) , marker='o',linewidth=1 ,color='b', label = "f(cos($\Theta$**2) / 4)")
    plt.fill_between(x, f(x),where=x < lim2+atenuacion, color='blue')

    delta_x = (rb-ra)/n
    riemannx = np.arange(ra, rb, delta_x)
    riemanny = f(riemannx)
    riemann_sum = sum(riemanny*delta_x)

    plt.bar(riemannx,riemanny,width=delta_x,alpha=0.5,facecolor='orange')

    plt.xticks(np.arange(0,450, atenuacion))
    plt.yticks(np.arange(-2,2,.25))
    plt.xlabel('$\Theta$')
    plt.ylabel('$f(\Theta)$')
    plt.title('f($\Theta$) = 3cos($\Theta^{2}$) / 4')
    plt.figtext(0.1,0.02, "Suma de Riemann: " + str(riemann_sum), color='r')
    plt.show()

riemannplot(f,0,360,lim1,lim2, 7, atenuacion)