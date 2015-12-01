const int analogInPin = A0;// Analog input pin that the potentiometer is attached to
const int analogInPin1 = A1;
const int analogOutPin = 9; // Analog output pin that the LED is attached to
const int analogOutPin1 = 8;
int sensorValue = 0;        // value read from the pot
int sensorValue1 = 0; 
int outputValue = 0;        // value output to the PWM (analog out)
int outputValue1 = 0; 
int flag=0;
int flag1=0;
int counter=0;
int counter1=0;
int counter2=0;
int counter3=0;

void setup() {
  // initialize serial communications at 9600 bps:
  pinMode(13,OUTPUT);
  Serial.begin(9600);
  flag=0;
  digitalWrite(8, LOW);
  flag1=0;
  digitalWrite(13, LOW);
  counter=counter1=counter2=counter3=0;
}

void loop() {
  // read the analog in value:
  sensorValue = analogRead(analogInPin);
  sensorValue1 = analogRead(analogInPin1);
  // map it to the range of the analog out:
  outputValue = map(sensorValue, 0, 1023, 0, 255);
  outputValue1 = map(sensorValue1, 0, 1023, 0, 255);
  // change the analog out value:
  analogWrite(analogOutPin, outputValue);
  analogWrite(analogOutPin1, outputValue1);
  // print the results to the serial monitor:
  if(outputValue<80)
  {
 counter++;
 if(counter>=10&&flag==0)
 { 
    Serial.println("1 1");
    digitalWrite(8, HIGH);
    flag=1;
    counter=0;
 }
  }
  else
  {
   
  digitalWrite(8, LOW);
  counter1++;
 if(counter1>=10&&flag==1)
 { 
    Serial.println("1 0");
    digitalWrite(8, LOW);
    flag=0;
    counter1=0;
 }
  }
  
  if(outputValue1<200)
  {
    counter2++;
 if(counter2>=10&&flag1==0)
 { Serial.println("2 1");
  digitalWrite(13, HIGH);
  flag1=1;
  counter2=0;
 }
 
  
  }
  else
  {
    digitalWrite(13, LOW);
  counter3++;
 if(counter3>=10&&flag1==1)
 { Serial.println("2 0");
  digitalWrite(13, LOW);
  flag1=0;
  counter3=0;
 }
  
  }
  // wait 2 milliseconds before the next loop
  // for the analog-to-digital converter to settle
  // after the last reading:
  delay(500);
}
