#include <cstdio>
#include <cstdlib>

int main(int argc, char *argv[])
{
	if(argc != 4)
	{
		printf("Usage: ./program [inputFile] [outputFile] [yourId]\n");
		return 0;
	}

	FILE *fin, *fout;

	// input file
	fin = fopen(argv[1], "r");
	if(!fin)
	{
		printf("Cannot open file to read: %s\n", argv[1]);
		return 1;
	}

	// output file
	fout = fopen(argv[2], "w");
	if(!fout)
	{
		printf("Cannot open file to write: %s\n", argv[2]);
		return 1;
	}

	int filterId = atoi(argv[3]);
	
	// invalid id
	if(filterId == 0) 
	{
		printf("Invalid ID number.\n");
		return 1;
	}

	char bufLine[256];
	int id;

	// loop read input and write output
	while(fgets(bufLine, 256, fin))
	{
		sscanf(bufLine, "%d", &id);
		if(id != filterId) continue;   // skip not matched ID

		fprintf(fout, "%s", bufLine);
	}

	fclose(fout);
	fclose(fin);

	return 0;
}

