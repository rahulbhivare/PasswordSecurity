#include <stdio.h>
#include <inttypes.h>

uint32_t SumOfDigits(uint32_t inp);

int main()
{
	uint32_t R, A, X, Y, Z, password;
	uint32_t I = 0;
	uint32_t in_ps;
	uint8_t c[2]={'a','\0'},ch;
	uint32_t i,j;
	
	FILE *fp;
	fp = 0;
	
	if ( (fp = fopen("rd.txt","r")) == 0) {
		/* 	One time registration
			User enters password 
			Many files aregenerated accordingly
		*/
		printf("Setup for first time installation \n");
		while(I == 0) {
			printf("Enter password \n");
			scanf("%"SCNu32, &I);
			printf("done %"PRIu32"\n",I);
		}
		printf("Enter operation code \n");
		scanf("%"SCNu32, &in_ps);
		
		//find number of digits 
		password = I;
		X = 1;
		while(password) {
			password = password/10;
			X+=2;
		}
		R = X;
		
		password = I;
		fp = fopen("rd.txt","w");
		fprintf(fp,"setup done with %"PRIu32" files created\n",X);
		fclose(fp);
		while(X) {
			if((fp = fopen(c, "wb")) == 0) {
				printf("Cannot create files as no write access \n");
			} else {
				c[0]++;
				if(X & 1){
					Z = password & 0x1645;
					fwrite(&Z, 4,1,fp);
					Z = password + X;
					fwrite(&Z, 4,1,fp);
					Z = Z + I;
					fwrite(&Z, 4,1,fp);
					Z = Z % (password+3);
					fwrite(&Z, 4,1,fp);
					
					Z = password%10;
					fwrite(&Z, 4,1,fp);
					Z = password & 0xA53B;
					fwrite(&Z, 4,1,fp);
					Z = password + 0x124;
					fwrite(&Z, 4,1,fp);
					Z = Z + I;
					fwrite(&Z, 4,1,fp);
					Z = Z % 0x1345;
					fwrite(&Z, 4,1,fp);
					password = password/10;
				} else {
					Z = password & 0x1645;
					fwrite(&Z, 4,1,fp);
					Z = password + X;
					fwrite(&Z, 4,1,fp);
					Z = Z + I;
					fwrite(&Z, 4,1,fp);
					Z = Z % (password+1);
					fwrite(&Z, 4,1,fp);
				}
				fclose(fp);
			}
			X--;
		}
		// reverse engg
		X = R;
		printf("Done registering password and pass-code. \n Installed necessary files. \n Thank You \n");
		return 0;
	} else {
		/* Everytime
		   User enters pass-code.
		   Application reads files to know password and 
		   then generates temperary password 
		*/
		fscanf(fp,"setup done with %"PRIu32" files created\n",&X);
		fclose(fp);

		Y = 0;
		i = 0;
		while(X) {
			if((fp = fopen(c, "rb")) == 0) {
				printf("Cannot create files as no read access \n");
			} else {
				if(X & 1){
					fread(&Z, 4,1,fp);
					fread(&Z, 4,1,fp);
					fread(&Z, 4,1,fp);
					fread(&Z, 4,1,fp);
					fread(&Z, 4,1,fp);
					for(j=i; j>0; j--){
						Z *= 10;
					}
					Y = Y + Z;
					i++;
				} else {
				}
				c[0]++;
				fclose(fp);
			}
			X--;
		}
	//	printf("\n final password %"PRIu32"\n",Y);

	}
	I = Y;
	printf("Enter the number \n");
	scanf("%lu", &R);
	
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
	
	printf("\n generate password: %lu ", password); 
	getch();

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
