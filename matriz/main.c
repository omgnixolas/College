#include <stdio.h>
#include <stdlib.h>

int main()
{
    int matriza[5] = {0}, matrizb[5] = {0}, matrizc[5] = {0};
    int ca = 0, cb = 0,cc = 0;


    for (ca=0;ca<5;ca++)
    {
        printf("Digite o valor %d da matriz A: ", ca+1);
        scanf(" %d", &matriza[ca]);
    }

    printf("\n\n\n");

    for (cb=0;cb<5;cb++)
    {
        printf("Digite o valor %d da matriz B: ", cb+1);
        scanf(" %d", &matriza[cb]);
    }

    for(cc=0;cc<5;cc++)
    {
        matrizc[cc] = (matriza[cc] - matrizb[cc]);
        printf("\nmatriz c %i ", matrizc[cc]);
    }






    return 0;
}
