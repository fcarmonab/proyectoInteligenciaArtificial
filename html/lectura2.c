#include<stdio.h>
#include<stdlib.h>
#include<string.h>

int main() {
    
    system("clear");
    FILE *pf;
    FILE *pfa,*pfe,*pfi,*pfo,*pfu;
    char c;
    char textoA[1000];
    char textoE[1000];
    char textoI[1000];
    char textoO[1000];
    char textoU[1000];
    int a=0,e=0,i=0,o=0,u=0,espacios=0;
    

    pf=fopen("/home/cluster1/file.txt","r");
    while(1) {
             c=fgetc(pf);
             if( feof(pf) ){
                           break;
                           }
                           if (c ==' '){ espacios++;
                           }
                           if (c =='a'){ a++;
                                       textoA[a]=c;
                                       pfa=fopen("/home/cluster1/a.txt","a");
                                       fprintf(pfa,"%c",textoA[a]);
                                      // system("cat /home/cluster1/a.txt");
                                       }


                          if  (c =='e'){
                                        e++;
                                        textoE[e]=c;
                                        pfe=fopen("/home/cluster1/e.txt","a");
                                        fprintf(pfe,"%c",textoE[e]);
                                       }

                          if (c =='i'){ 
                                       i++;
                                       textoI[i]=c;
                                       pfi=fopen("/home/cluster1/i.txt","a");
                                       fprintf(pfi,"%c",textoI[i]);
                                      }

                          if (c =='o'){
                                       o++;
                                       textoO[o]=c;
                                       pfo=fopen("/home/cluster1/o.txt","a");
                                       fprintf(pfo,"%c",textoO[o]);
                                       }
                          if (c =='u'){
                                      u++;
                                      textoU[u]=c;
                                      pfu=fopen("/home/cluster1/u.txt","a");
                                      fprintf(pfu,"%c",textoU[u]);
                                      }

             } // fin del cliclo while
   fclose(pf);

printf("\n\n\n");
printf("%i Espacios en Blanco\n",espacios);
printf("%d Letras a\n",a);
printf("%i Letras e\n",e);
printf("%i Letras i\n",i);
printf("%i Letras o\n",o);
printf("%i Letras u\n",u);

system("cat /home/cluster1/a.txt");



   return 0;
} //fin del main	     
