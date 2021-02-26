#include <stdio.h>
#include <stdlib.h>

int main()
{
   int cod1, num1, cod2, num2;
   float vl1, vl2, result;

   printf("Insira respectivamente o codigo da peça, numero de peças e seu valor unitario\n");
   scanf("%i %i %f", &cod1, &num1, &vl1);

   printf("Insira respectivamente o codigo do produto, numero de peças  e seu valor unitario\n");
   scanf("%i %i %f", &cod2, &num2, &vl2);

   result = (num1 * vl1) + (num2 * vl2);

   printf("Valor a pagar : R$%.2f", result);









    return 0;
}
