#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main()
{
    int num[15];
    int i, j, t;

    // PARA USAR ACENTUAÇÃO //
    setlocale(LC_ALL, "Portuguese");

    // ALGORITMO DE ORDENAÇÃO //


    for(i=0;i<15;i++)
    {
        printf("Digite o %d número:  \n", i+1);
        scanf("%d", &num[i]);
    }


    for(i=0;i<14;i++)
    {
        for(j=i+1;j<15;j++)
        {
            if(num[i]>num[j])
            {
                t=num[i];
                num[i]=num[j];
                num[j]=t;
            }
        }
    }

    printf("==============================\n");

    for(i=0;i<15;i++)
    {
        printf("%d => %d\n",i,num[i]);
    }

    int ini = 1, meio = 0, fim = 15, busca;

    printf("Digite um numero: ");
    scanf("%d", &busca);

    // ALGORITMO DE BSEARCH - (SOMENTE SE TIVER ORDENADO)
    do
    {
        meio = (ini+fim)/2;
        if (busca > num[meio])
        {
            ini = meio + 1;
        }
       else
        {
            fim = meio - 1;
        }

    } while (busca != num[meio] || ini < fim);
    if(t!= num[meio])
    {
        printf("Achou na linha %d\n\n", meio);
    } else
    { printf("Não achou"); }

    printf("NÚMERO ENCONTRADO, POSIÇÃO: %d", meio);

    return 0;
}

