#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main()
{
   setlocale(LC_ALL, "Portuguese");
   int a,b,c,d;

   printf("Valor de A:\n ");
   scanf("%i", &a);

   printf("Valor de B:\n ");
   scanf("%i", &b);

   printf("Valor de C:\n ");
   scanf("%i", &c);

   printf("Valor de D:\n ");
   scanf("%i", &d);

   printf("Diferen�a: %i", a*b-c*d);









    return 0;
}
