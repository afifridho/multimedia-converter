import os
import sys
from converter import Converter
from os.path import basename

c = Converter()

os.chdir('/home/afifridho/Downloads')
filename = sys.argv[1].split('.')[0]
info = c.probe(sys.argv[1])
conv = c.convert(sys.argv[1], filename+'.'+sys.argv[2], {
	'format': sys.argv[2],
	'audio': {
		'codec': sys.argv[3],
		'samplerate': int(sys.argv[4]),
		'channels': int(sys.argv[5])
	},
	'video': {
		'codec': sys.argv[6],
		'width': int(sys.argv[7]),
		'height': int(sys.argv[8]),
		'fps': int(sys.argv[9])
	}})
for timecode in conv:
	print "Converting (%f) ...\r" % timecode
