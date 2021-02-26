#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
    char nome[5][20], busca[1][20];
    float um[5][2],md;
    int c;

    for(c=0;c<5;c++)
    {
        printf("\nNome: ");
        scanf(" %s", &nome[c]);

        printf("\nNota do primeiro bimestre ");
        scanf(" %f", &um[c][0]);

        printf("\nNota do segundo bimestre ");
        scanf(" %f", &um[c][1]);

        md = (um[c][0] + um[c][1])/2;

    }

    printf("\nNome: ");
    scanf(" %s", &busca[0]);
    for(c=0;c<5;c++)
    {
            if(strcmp(busca[1],nome[c]) == 0)
        {
            printf("md: %.2f ", md);
        }
    }



















    return 0;
}
