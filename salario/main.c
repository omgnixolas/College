#include <stdio.h>
#include <stdlib.h>

int main()
{

   float valorhoras, salario;
   int num, hora;

   printf("Insira seu numero:\n");
   scanf("%i", &num);

   printf("Insira o valor por hora:\n");
   scanf("%f", &valorhoras);

   printf("Insira o numero de horas trabalhadas:\n");
   scanf("%i", &hora);

   salario = hora * valorhoras;

   printf(" === Number: %i ====\n ", num);
   printf("=== Salario: R$%.2f ===", salario);













    return 0;
}
