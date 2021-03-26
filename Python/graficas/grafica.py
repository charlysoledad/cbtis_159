from matplotlib import pyplot
lenguages = ('Python', 'C', 'Java', 'Go', 'Javascript')
slices = (100, 130, 90, 80, 128)
colores = ('red', 'blue', 'green', '#DD98AA', '#18492D')

_, _, texto = pyplot.pie(slices, colors=colores, labels=lenguages, autopct='%1.1f%%')

for tex in texto:
	tex.set_color('white')

pyplot.axis('equal')
pyplot.title('Grafica de lenguajes de programacion')
#pyplot.legend(labels=lenguajes)
pyplot.show()