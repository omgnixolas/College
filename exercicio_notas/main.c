#include <stdio.h>
#include <stdlib.h>

int main()
{
    float a[4], b[4];
    int c;

    for(c=0; c<4;++c)
    {
        printf("\ndigite a nota do aluno: %d: ", c+1);
        scanf(" %f", &a[c]);
    }
    for(c = 0; c<4; ++c)
    {
        if( c % 2 == 0)
        {
              b[c] = a[c] * 5;
        }
        else
        {
             b[c] = a[c] + 5;
        }

        printf("\n Valor da matriz %.2f", b[c]);
    }










    return 0;
}
