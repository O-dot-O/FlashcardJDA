#include <stdio.h>
#include <stdlib.h>

int main(int argc,char *argv) {
    int i;

    for (i = 0; i < 500; i+= 15){
        printf("%d\n",i);
    }
    return 0;
}