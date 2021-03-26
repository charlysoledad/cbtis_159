import math
import matplotlib.pyplot as plt
import numpy as np

global th

def f(th):
	degrees = math.radians(th);
	y = np.cos(degrees)
	return y

th = int(input("Ingresa el valor de tetha: "))

print(f(th))