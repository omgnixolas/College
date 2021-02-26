#include <stdio.h>
#include <stdlib.h>

int meufor(int x, int y, int z)
{
    printf("\n %d", x);

    if (x < y)
    {
        meufor(x + z,y,z);
    }
}

int main()
{
    meufor(2,30,2);
    return 0;
}
