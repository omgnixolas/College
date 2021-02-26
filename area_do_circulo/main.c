#include <stdio.h>
#include <stdlib.h>

int main()
{
    float raio, area;

    printf("Insira o raio do circulo: \n");
    scanf("%f", &raio);

    area = (raio*raio) * 3.14159;

    printf("Area: %.2f", area);

    return 0;
}
