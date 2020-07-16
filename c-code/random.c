#include <stdio.h> 
#include <time.h> 
   
int main() 
{ 
    time_t seconds; 
   
     // Stores time seconds 
    time(&seconds); 
    printf("Seconds since January 1, 1970 = %ld\n", seconds); 
   
    return 0; 
} 

