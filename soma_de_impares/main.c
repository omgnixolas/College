#include <stdio.h>
#include <stdlib.h>

int main()
{

    int num[6];
    int cont, total = 0, par = 0;

    for(cont=0;cont<6;++cont)
    {
        scanf("%d", &num[cont]);

        if((num[cont] + 0) % 2 != 0)
        {
            total = num[cont] + total;
        }
    }

    printf("total: %d", total);









    return 0;
}
