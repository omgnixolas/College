#include <stdio.h>
#include <stdlib.h>

int main()
{
    int num[5];
    int i ,j,t;
    printf("Digite 5 numeros: ");

    for(i=0;i<5;i++)
    {
        scanf("%d", &num[i]);
    }

    for(i=0;i<4;i++)
    {
        for(j=i+1;j<5;j++)
        {
            printf("Comparar %d com %d\n",i,j);
            if(num[i]>num[j])
            {
                printf("Trocando...\n");
                t=num[i];
                num[i]=num[j];
                num[j]=t;
            }
        }
    }
    printf("==============================\n");
    for(i=0;i<5;i++)
    {
        printf("%d => %d\n",i,num[i]);
    }






    return 0;
}
