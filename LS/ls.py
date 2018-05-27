import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)
GPIO.setup(7,GPIO.IN)

for i in range(0,1):
    print GPIO.input(7)
GPIO.cleanup()

