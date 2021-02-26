#include <stdio.h>
#include <stdlib.h>

int main()
{
    float divida, juros, total, result;
    int parcela, contador;

    printf("Qual o valor da divida?\n");
    scanf(" %f", &divida);

    printf("Quantas parcelas?\n");
    scanf(" %d", &parcela);

    printf("Qual o valor dos juros?\n");
    scanf(" %f", &juros);

    for(contador = 1; contador <= parcela; ++contador)
    {
        if(parcela < 0 || parcela >12)
        {
            printf("Numero de parcelas permitidas: 0 a 12!!!!!!!");
            contador = ++parcela;
        }
        else if(juros > 100)
        {
            printf("Juro maximo eh 100");
            contador = ++parcela;
        }
        else if (divida < 0)
        {
            printf("Insira sua divida de forma positiva");
            contador = ++parcela;
        }
        else
        {
            total = (divida / contador);
            result = ((juros/100)*total) + total;
            ++juros;
            printf("\nValor de %i parcela: %.2f", contador, result);
        }





    }







    return 0;
}
