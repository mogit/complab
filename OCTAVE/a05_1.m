T=imread("input.bmp");
	
	P=T;
	k=0;
	
	for (x=1:600)
		k=k+1;
		if(T(x,55)==1)
			break;
		end
	end
	for (temp1= k+20:k+30)
		for temp2= 1:55
			P(temp1,temp2)=0;
		end
	end

	pre_y=55;
	pre_k=k;

	f
imwrite(P,"output.bmp");
