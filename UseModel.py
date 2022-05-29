import pickle
import sys
import numpy as np


input= sys.argv[1].split(",")
input = np.array(input,dtype=float).tolist()


model = pickle.load(open('pml_model.sav', 'rb'))

print(model.predict([input])[0]) #just one result bcs we only recieve 2 args


