#include <stdio.h>
#include <stdlib.h>

int potencia(int x, int y)
{
     int c,b=1;

     for(c=1;c<=y;c++)
     {
        b = x * b;
     }

    return b;
}

int main()
{

    int num1,num2;

    printf("Digite um número");
    scanf("%d", &num1);

    printf("Digite o expoente");
    scanf("%d", &num2);

    potencia(num1,num2);

    printf("%d", potencia(num1,num2));

    return 0;
}
