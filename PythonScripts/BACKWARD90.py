#RIGHT SPEED 50 
import l293d
import time

#m1 configuration
m1 = l293d.DC(11, 12, 13)
m2 = l293d.DC(15, 16, 18) 
m3 = l293d.DC(22, 29, 31) 
m4 = l293d.DC(32, 33, 36) 

pwm = l293d.PWM(freq=30, cycle=90)

x=1

while x == 1:
	m1.anticlockwise(speed=pwm) 
	m2.anticlockwise(speed=pwm) 
	m3.anticlockwise(speed=pwm) 
	m4.anticlockwise(speed=pwm) 
	time.sleep(1)

