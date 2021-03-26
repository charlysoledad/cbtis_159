import numpy as np
import matplotlib.pyplot as plt
import matplotlib.animation as animation
import math

def f(x):
	return 2*(x**3)+2

def riemman(fun, startingX, endingX, lim1, lim2, rectangles, separacion):
	separacion = float(separacion)
	x = np.arange(startingX, endingX+separacion, separacion)
	y = f(x)

	delta_x = (lim2 - (lim1)) / rectangles
	intervalo = delta_x / 2
	riemman_x = np.arange(lim1, lim2, delta_x)
	riemman_y = f(riemman_x)
	
	# subintervalos
	sub_in = np.arange(lim1,lim2+.5,intervalo)
	riemman_sum = sum(riemman_y*delta_x)

	print("Delta x: "+str(delta_x))
	print("intervalo: "+str(intervalo))
	print("Subintervalos: " + str(sub_in))

	plt.fill_between(x, f(x),where=x < lim2+separacion, color='red')

	plt.plot(x, f(x), marker='*', linewidth=1, c='r')

	plt.bar(riemman_x,riemman_y, width=delta_x, alpha=2.3,facecolor='green')
	plt.xticks(x)
	plt.yticks(y)
	plt.grid(True)
	plt.figtext(0.1,0.02, "Delta x: " + str(delta_x), color ='b')
	plt.figtext(0.1,0.04, "Intervalo: " + str(intervalo), color ='b')
	plt.figtext(0.1,0.06, "Suma de Riemann: " + str(riemman_sum), color ='b')
	plt.show()

riemman(f, -3, 4, -2, 3, 10000, 1)