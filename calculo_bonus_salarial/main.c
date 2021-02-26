#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main()
{
    char nome[10];
    float fixo, montante, salario;

    printf("===Qual seu nome?===\n");
    scanf(" %s", &nome);

    printf("Qual seu salario fixo?\n");
    scanf(" %f", &fixo);

    printf("Qual o montante mensal?\n");
    scanf(" %f", &montante);

    salario = (montante * 0.15) + fixo;

    printf("Total = R$%.2f", salario);








    return 0;
}
