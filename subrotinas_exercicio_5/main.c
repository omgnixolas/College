    #include<stdio.h>
    #include<conio.h>

    char repet_func(char x)
    {
      char nome[61];

      printf("Digite seu nome: ");
      gets(nome);

      printf("O nome armazenado foi: %s", nome);

      getch();
      return nome;
    }

    int main(void)
    {
     char a = repet_func(nome);

     printf("%s",a);

      return 0;
    }
