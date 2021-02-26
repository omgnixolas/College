#include <stdio.h>
#include <stdlib.h>

int main()
{
    float volume, raio;

    printf("Valor do raio");
    scanf("%f", &raio);

    volume = (4/3.0) * 3.14159 * (raio * raio * raio);
    printf("Volume = %.3f", volume);





    return 0;
}
