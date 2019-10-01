#include  <iostream>>
#include <math.h>

float a;
float b;
float c;
float delta;
float raisdeDelta;
float x1;
float x2;

	main()
	{
		printf ("insira o Valor de A: ");
		scanf ("%f",&a);
		printf ("Insira o Valor de B : ");
		scanf ("%f",&b);
		printf ("insira valor de C : ");
		scanf ("%f",&c);
		
	    delta = (b*b)-(4*a*c);
	    raisdeDelta = sqrt(delta);
	    
		printf ("delta =%.2f\n ",delta);
		
		 x1 = (-b + raisdeDelta)/(2*a);
		 x2 = (-b - raisdeDelta)/(2*a);
		
		
		printf ("x1 = %.2f \n",x1);
		printf ("x2 = %.2f\n", x2);
		system ("PAUSE>NULL");
		return 0;
		
		
	}
