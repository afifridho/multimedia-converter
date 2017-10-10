import sys
from PIL import Image

im = Image.open(sys.argv[1]).convert(sys.argv[5])
new = im.resize((int(sys.argv[3]),int(sys.argv[4])))
new.save(sys.argv[2])
