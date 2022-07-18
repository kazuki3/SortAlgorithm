#include <stdio.h>

#define N 6

void main(void)
{
    int a[]={80,41,35,90,40,20};
    int min,s,t,i,j;

    for (i=0;i<N-1;i++){
        min=a[i];
        s=i; // s=最小項

        // j=現在の項+1
        for (j=i+1;j<N;j++){
            if(a[j]<min){
                min=a[j];// 最小が移る
                s=j;
            }
        }
        t=a[i]; // 現在の項を一時保存
        a[i]=a[s]; // 現在の項に
        a[s]=t;
    }

    for (i=0;i<N;i++){
        printf("%d ",a[i]);
    }
    printf("\n");
}