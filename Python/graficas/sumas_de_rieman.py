import numpy as np
import matplotlib.pyplot as plt
import math
from turtle import *
import sys

# f(theta)
def f(theta):
	theta = (theta**2)*math.pi / 180
	y = ((3*np.cos(theta)) / 4)
	#print("X"+str(theta))
	#print("Y"+str(y))
	return y

def f_s(x):
	y = x**2
	return y

#Riemman
def integral(startingX, endingX, rectangles):
	width = (float(endingX) - float(startingX))/rectangles
	print("Ancho: " + str(width))
	runningSum = 0
	for i in range(rectangles):
		height = f(startingX + i * width)
		area = height * width
		runningSum += area
	return runningSum

def tick():
	lt(90)
	fd(.1)
	bk(.2)
	fd(.1)
	rt(90)

def setup():
	clear()
	speed(0)
	setworldcoordinates(0,-1,1,360)
	setpos(0,0)
	color("black")
	pd()
	for i in range(4):
		for j in range(5):
			fd(1)
			tick()
		bk(5)
		rt(90)

def posxy(startingX):
	speed(0)
	pu()
	setpos(startingX,f(startingX))
	pd()
	dx = 0.01
	setheading(0)
	for i in range(900):
		fd(dx)
		sety(f(xcor()))
	pu()

def rectangle(startingX, width):
	speed(0)
	pu()
	setpos(startingX,0)
	setheading(90)
	color("black","red")
	pd()
	begin_fill()
	height = f(xcor())
	fd(height)
	rt(90)
	fd(width)
	rt(90)
	fd(height)
	setheading(0)
	end_fill()

def lefthand(startingX, endingX, rectangles):
	setup()
	posxy(startingX)
	width = (float(endingX) - float(startingX)) / rectangles
	setpos(startingX,0)
	area = 0
	for i in range(rectangles):
		rectangle(xcor(), width)
		area1 = f(startingX + i * width) * width
		area += area1
	print(area)

lefthand(0,2,10)

t = input("Cerrar Y/N")
if (t == "y" or t == "Y"):
	exit()

