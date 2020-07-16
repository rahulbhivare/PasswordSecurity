#include <stdio.h>
#include <inttypes.h>

uint32_t SumOfDigits(uint32_t inp);

int main(int argc, char *argv[])
{
	uint32_t R, A, X, Y, Z, password;
	uint32_t I = 0;//101978;	
	uint32_t in_ps;
	uint8_t c,ch;
	uint32_t i,j;

	R = 0;
	
//	for(i=0; i<8; i++)
	i= 0;
	while(argv[1][i] != '\0') {
		R = (R*10) + (argv[1][i]-48);
		i++;
	}
	
	I =0;
//	for(i=0; i<6; i++)
	i = 0;
	while(argv[2][i] != '\0') {
		I = (I*10) + (argv[2][i]-48);
		i++;
	}
		
		
	//printf("%lu \n", R);
			
	// Skip first 2 digits of password 
	A = R & 0xFFFFFF0;
	A = A >> 4;
	
	// 1. X = Add remaining digits of number 
	X = SumOfDigits(A);

	// 	2. Y = Add digits of password, 101978 
	Y = SumOfDigits(I);
	
	//	3. Z = X + Y + password + accepted digits of password 
	Z = X + Y + I;	
	
	A = A * 100;

	/* Q. Select any operation 
		1. 4 division + 4 reminder 
	*/
	password = (A/Z);
	password = password * 10000;
	password = password + (A%Z);
	
//	printf("\n generate password: %lu ", password); 
	return password;
}

uint32_t SumOfDigits(uint32_t inp)
{
	uint32_t X = 0, B, rem;
	int i,j;
	
	B = inp;
        i = 0;	
        while(B) {	
	    for(j=i, rem=1; j > 0; j--, rem *= 10);
	    X += B % rem;
	    B = B / rem;
            i++;	
        }
	return X;
}

