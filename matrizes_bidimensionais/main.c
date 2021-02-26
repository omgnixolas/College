#include <stdio.h>
#include <stdlib.h>

int main()
{
    int coelhos[3][6]={0,0};
    int c=0,m=0, media[3] = {0,0,0};

    for(c=0;c<3;c++)
    {
        for(m=0;m<6;m++)
        {
            printf("Insira a quantidade de filhotes do coelho %d no mes %d: ",c+1,m+1);
            scanf("%d", &coelhos[c][m]);
        }
        printf("\n");
    }
   for(c=0;c<3;c++)
   {
        for(m=0;m<6;m++)
        {
            media[c] = coelhos[c][m] + media[c];
        }

        media[c] = media[c]/6;
        printf("Media semestral do coelho %d ===== %d", c+1, media[c]);
        printf("\n");

   }








    return 0;
}
